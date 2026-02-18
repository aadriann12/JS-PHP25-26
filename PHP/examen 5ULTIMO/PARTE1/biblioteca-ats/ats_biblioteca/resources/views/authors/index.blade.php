<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Autores</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-medium">Listado de autores</p>
                        <a href="{{ route('authors.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Nuevo autor
                        </a>
                    </div>

                    <ul class="space-y-3">
                        @forelse($authors as $author)
                            <li class="p-4 border rounded-md">
                                <div class="font-semibold">
                                    {{ $author->name }}
                                </div>

                                <div class="text-sm text-gray-600 mt-1">
                                    @if($author->country) País: {{ $author->country }} @endif
                                    @if($author->birth_date) · Nacimiento: {{ optional($author->birth_date)->format('Y-m-d') }} @endif
                                </div>

                                <div class="mt-3 flex gap-3 text-sm">
                                    <a class="underline" href="{{ route('authors.show', $author) }}">Ver</a>
                                    <a class="underline" href="{{ route('authors.edit', $author) }}">Editar</a>

                                    <form action="{{ route('authors.destroy', $author) }}" method="POST"
                                          onsubmit="return confirm('¿Eliminar autor?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="underline text-red-600">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @empty
                            <li class="text-gray-600">No hay autores.</li>
                        @endforelse
                    </ul>

                    @if(method_exists($authors, 'links'))
                        <div class="mt-6">
                            {{ $authors->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
