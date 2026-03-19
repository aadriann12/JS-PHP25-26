<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nuevo libro</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf

                        <div>
                            <label>Título</label><br>
                            <input name="title" value="{{ old('title') }}">
                            @error('title') <div>{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label>ISBN</label><br>
                            <input name="isbn" value="{{ old('isbn') }}">
                            @error('isbn') <div>{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label>Año publicación</label><br>
                            <input name="published_year" type="number" value="{{ old('published_year') }}">
                            @error('published_year') <div>{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label>Autor</label><br>
                            <select name="author_id">
                                <option value="">-- sin autor --</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}" {{ (string)old('author_id') === (string)$author->id ? 'selected' : '' }}>
                                        {{ $author->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('author_id') <div>{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label>Categorías</label><br>
                            @foreach($categories as $category)
                                <label>
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                    {{ $category->name }}
                                </label><br>
                            @endforeach
                            @error('categories') <div>{{ $message }}</div> @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit">Guardar</button>
                            <a href="{{ route('books.index') }}">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

