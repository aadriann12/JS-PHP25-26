<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;
use App\Models\User;
use App\Models\Book;

class LoansTableSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = User::pluck('id')->all();
        $bookIds = Book::pluck('id')->all();

        if (count($userIds) === 0 || count($bookIds) === 0) {
            return; // no hay usuarios o libros; evita romper el seed
        }

        // 2 préstamos activos y 2 devueltos
        Loan::create([
            'book_id' => $bookIds[0],
            'user_id' => $userIds[0],
            'loaned_at' => now()->subDays(2),
            'returned_at' => null,
            'status' => 'active',
        ]);

        Loan::create([
            'book_id' => $bookIds[1] ?? $bookIds[0],
            'user_id' => $userIds[0],
            'loaned_at' => now()->subDays(10),
            'returned_at' => now()->subDays(3),
            'status' => 'returned',
        ]);

        Loan::create([
            'book_id' => $bookIds[2] ?? $bookIds[0],
            'user_id' => $userIds[1] ?? $userIds[0],
            'loaned_at' => now()->subDays(1),
            'returned_at' => null,
            'status' => 'active',
        ]);

        Loan::create([
            'book_id' => $bookIds[3] ?? $bookIds[0],
            'user_id' => $userIds[1] ?? $userIds[0],
            'loaned_at' => now()->subDays(20),
            'returned_at' => now()->subDays(18),
            'status' => 'returned',
        ]);
    }
}