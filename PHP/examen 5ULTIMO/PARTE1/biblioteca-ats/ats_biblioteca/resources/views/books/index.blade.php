<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Libros
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-medium">Listado de libros</p>

                        @auth
                        @if(auth()->user()->isLibrarian() || auth()->user()->isAdmin())
                        <a href="{{ route('books.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Nuevo libro
                        </a>
                        @endif
                        @endauth
                    </div>

                    <ul class="space-y-3">
                        @forelse($books as $book)
                            <li class="p-4 border rounded-md">
                                <div class="font-semibold">
                                    {{ $book->title }}
                                </div>

                                <div class="text-sm text-gray-600 mt-1">
                                    @if($book->isbn) ISBN: {{ $book->isbn }} @endif
                                    @if($book->published_year) · Año: {{ $book->published_year }} @endif
                                    @if(optional($book->author)->name) · Autor: {{ $book->author->name }} @endif
                                </div>

                                <div class="mt-3 flex gap-3 text-sm">
                                    <a class="underline" href="{{ route('books.show', $book) }}">Ver</a>

                                    @auth
                                    @if(auth()->user()->isLibrarian() || auth()->user()->isAdmin())
                                    <a class="underline" href="{{ route('books.edit', $book) }}">Editar</a>

                                    <form action="{{ route('books.destroy', $book) }}" method="POST"
                                          onsubmit="return confirm('¿Eliminar libro?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="underline text-red-600">
                                            Eliminar
                                        </button>
                                    </form>
                                    @endif
                                    @endauth
                                </div>
                            </li>
                        @empty
                            <li class="text-gray-600">No hay libros.</li>
                        @endforelse
                    </ul>

                    @if(method_exists($books, 'links'))
                        <div class="mt-6">
                            {{ $books->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
