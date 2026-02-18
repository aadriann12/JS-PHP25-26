<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $author->name }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <p><strong>País:</strong> {{ $author->country ?? '-' }}</p>
                    <p><strong>Nacimiento:</strong> {{ optional($author->birth_date)->format('Y-m-d') ?? '-' }}</p>

                    <div class="mt-4">
                        <a href="{{ route('authors.edit', $author) }}">Editar</a>
                        <a href="{{ route('authors.index') }}">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
