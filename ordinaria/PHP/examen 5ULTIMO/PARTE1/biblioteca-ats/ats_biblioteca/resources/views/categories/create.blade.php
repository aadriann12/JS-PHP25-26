<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nueva categoría</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        <div>
                            <label>Nombre</label><br>
                            <input name="name" value="{{ old('name') }}">
                            @error('name') <div>{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label>Descripción</label><br>
                            <input name="description" value="{{ old('description') }}">
                            @error('description') <div>{{ $message }}</div> @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit">Guardar</button>
                            <a href="{{ route('categories.index') }}">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
