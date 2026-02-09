<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800">Mis préstamos</h2>
            <a href="{{ route('loans.create') }}" class="px-3 py-2 bg-indigo-600 text-white rounded text-sm">
                Solicitar
            </a>
        </div>
    </x-slot>

    <div class="py-8 max-w-6xl mx-auto px-4">
        @if(session('message'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('message') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <div class="bg-white p-4 rounded shadow">
            @if($loans->count() === 0)
                <p>No tengo préstamos.</p>
            @else
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b text-left">
                            <th class="py-2">Libro</th>
                            <th class="py-2">Estado</th>
                            <th class="py-2">Préstamo</th>
                            <th class="py-2">Vencimiento</th>
                            <th class="py-2">Devuelto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($loans as $loan)
                            <tr class="border-b">
                                <td class="py-2">{{ $loan->book->title ?? '—' }}</td>
                                <td class="py-2">{{ ucfirst($loan->status) }}</td>
                                <td class="py-2">{{ $loan->loaned_at ? $loan->loaned_at->format('d/m/Y') : '—' }}</td>
                                <td class="py-2">{{ $loan->due_at ? $loan->due_at->format('d/m/Y') : '—' }}</td>
                                <td class="py-2">{{ $loan->returned_at ? $loan->returned_at->format('d/m/Y') : '—' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $loans->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
