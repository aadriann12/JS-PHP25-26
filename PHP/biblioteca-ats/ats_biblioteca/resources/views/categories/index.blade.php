<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Categorías</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-medium">Listado de categorías</p>
                        <a href="{{ route('categories.create') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Nueva categoría
                        </a>
                    </div>

                    <ul class="space-y-3">
                        @forelse($categories as $category)
                            <li class="p-4 border rounded-md">
                                <div class="font-semibold">
                                    {{ $category->name }}
                                </div>

                                <div class="text-sm text-gray-600 mt-1">
                                    @if($category->description) {{ $category->description }} @endif
                                </div>

                                <div class="mt-3 flex gap-3 text-sm">
                                    <a class="underline" href="{{ route('categories.show', $category) }}">Ver</a>
                                    <a class="underline" href="{{ route('categories.edit', $category) }}">Editar</a>

                                    <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                          onsubmit="return confirm('¿Eliminar categoría?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="underline text-red-600">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @empty
                            <li class="text-gray-600">No hay categorías.</li>
                        @endforelse
                    </ul>

                    @if(method_exists($categories, 'links'))
                        <div class="mt-6">
                            {{ $categories->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
