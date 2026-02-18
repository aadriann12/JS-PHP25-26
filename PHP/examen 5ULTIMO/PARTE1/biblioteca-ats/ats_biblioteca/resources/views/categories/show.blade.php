<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $category->name }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <p><strong>Nombre:</strong> {{ $category->name }}</p>
                    <p><strong>Slug:</strong> {{ $category->slug ?? '-' }}</p>
                    <p><strong>Descripción:</strong> {{ $category->description ?? '-' }}</p>

                    <div class="mt-4 flex gap-3 text-sm">
                        <a class="underline" href="{{ route('categories.edit', $category) }}">Editar</a>
                        <a class="underline" href="{{ route('categories.index') }}">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
