<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Solicitar préstamo</h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto px-4">
        <x-validation-errors class="mb-4" />

        <div class="bg-white p-4 rounded shadow">
            <form method="POST" action="{{ route('loans.store') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium">Libro</label>
                    <select name="book_id" class="mt-1 w-full border rounded p-2">
                        <option value="">— Selecciono un libro —</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}" @selected(old('book_id') == $book->id)>
                                {{ $book->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium">Notas (opcional)</label>
                    <textarea name="notes" rows="3" class="mt-1 w-full border rounded p-2">{{ old('notes') }}</textarea>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('loans.index') }}" class="text-sm text-gray-600">Volver</a>
                    <button class="px-3 py-2 bg-indigo-600 text-white rounded text-sm">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
