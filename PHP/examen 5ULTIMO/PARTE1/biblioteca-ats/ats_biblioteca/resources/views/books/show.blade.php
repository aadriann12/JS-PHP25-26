<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $book->title }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <p><strong>ISBN:</strong> {{ $book->isbn ?? '-' }}</p>
                    <p><strong>Año:</strong> {{ $book->published_year ?? '-' }}</p>
                    <p><strong>Autor:</strong> {{ optional($book->author)->name ?? '-' }}</p>

                    <p><strong>Categorías:</strong>
                        @if($book->categories->isEmpty())
                            -
                        @else
                            {{ $book->categories->pluck('name')->join(', ') }}
                        @endif
                    </p>

                    <div class="mt-4">
                        <a href="{{ route('books.edit', $book) }}">Editar</a>
                        <a href="{{ route('books.index') }}">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
