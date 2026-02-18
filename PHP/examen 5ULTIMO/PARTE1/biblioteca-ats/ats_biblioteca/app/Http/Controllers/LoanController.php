<?php


namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LoanController extends Controller
{

    public function index(Request $request): View
    {
        $loans = Loan::with('book')
            ->where('user_id', $request->user()->id)
            ->latest()
            ->paginate(10);

        return view('loans.index', compact('loans'));
    }

    // SOCIO: formulario solicitar préstamo (solo libros disponibles)
    public function create(): View
    {
        $books = Book::where('is_available', true)
            ->orderBy('title')
            ->get();

        return view('loans.create', compact('books'));
    }

    // SOCIO: enviar solicitud
    public function store(Request $request)
    {
        $data = $request->validate([
            'book_id' => ['required', 'integer', 'exists:books,id'],
            'notes'   => ['nullable', 'string', 'max:1000'],
        ]);

        $user = $request->user();

        $activeCount = Loan::where('user_id', $user->id)
            ->whereIn('status', ['pending', 'approved'])
            ->whereNull('returned_at')
            ->count();

        if ($activeCount >= 3) {
            return back()->withErrors(['book_id' => 'No puedo tener más de 3 préstamos activos.'])->withInput();
        }

        $hasOverdue = Loan::where('user_id', $user->id)
            ->where('status', 'approved')
            ->whereNull('returned_at')
            ->whereNotNull('due_at')
            ->where('due_at', '<', Carbon::today())
            ->exists();

        if ($hasOverdue) {
            return back()->withErrors(['book_id' => 'Tengo préstamos vencidos sin devolver.'])->withInput();
        }

        DB::transaction(function () use ($data, $user) {
            $book = Book::whereKey($data['book_id'])->lockForUpdate()->firstOrFail();

            if (! $book->is_available) {
                abort(422, 'Ese libro no está disponible.');
            }

            Loan::create([
                'user_id'     => $user->id,
                'book_id'     => $book->id,
                'status'      => 'pending',
                'notes'       => $data['notes'] ?? null,
                'loaned_at'   => null,
                'due_at'      => null,
                'returned_at' => null,
            ]);
        });

        return redirect()->route('loans.index')->with('message', 'Solicitud enviada correctamente.');
    }

    // BIBLIOTECARIO/ADMIN: ver TODOS los préstamos
    public function indexAll(): View
    {
        $loans = Loan::with(['user', 'book', 'librarian'])
            ->latest()
            ->paginate(10);

        return view('loans.all', compact('loans'));
    }

    // BIBLIOTECARIO/ADMIN: aprobar
    public function approve(Request $request, Loan $loan)
    {
        DB::transaction(function () use ($request, $loan) {
            $loan->refresh();

            if ($loan->status !== 'pending') {
                abort(422, 'Solo se pueden aprobar préstamos pendientes.');
            }

            $book = Book::whereKey($loan->book_id)->lockForUpdate()->firstOrFail();

            if (! $book->is_available) {
                abort(422, 'El libro ya no está disponible.');
            }

            $today = Carbon::today();

            $loan->update([
                'status'       => 'approved',
                'loaned_at'    => $today,
                'due_at'       => $today->copy()->addDays(15),
                'librarian_id' => $request->user()->id,
            ]);

            $book->update(['is_available' => false]);
        });

        return back()->with('message', 'Préstamo aprobado (15 días).');
    }

    // BIBLIOTECARIO/ADMIN: rechazar
    public function reject(Request $request, Loan $loan)
    {
        if ($loan->status !== 'pending') {
            return back()->withErrors(['status' => 'Solo se pueden rechazar préstamos pendientes.']);
        }

        $loan->update([
            'status'       => 'rejected',
            'librarian_id' => $request->user()->id,
        ]);

        return back()->with('message', 'Préstamo rechazado.');
    }

    // BIBLIOTECARIO/ADMIN: marcar como devuelto
    public function markAsReturned(Request $request, Loan $loan)
    {
        DB::transaction(function () use ($request, $loan) {
            $loan->refresh();

            if ($loan->status !== 'approved' || $loan->returned_at !== null) {
                abort(422, 'Solo se pueden devolver préstamos aprobados.');
            }

            $book = Book::whereKey($loan->book_id)->lockForUpdate()->firstOrFail();

            $loan->update([
                'status'       => 'returned',
                'returned_at'  => Carbon::today(),
                'librarian_id' => $request->user()->id,
            ]);

            $book->update(['is_available' => true]);
        });

        return back()->with('message', 'Libro devuelto y disponible de nuevo.');
    }
}




