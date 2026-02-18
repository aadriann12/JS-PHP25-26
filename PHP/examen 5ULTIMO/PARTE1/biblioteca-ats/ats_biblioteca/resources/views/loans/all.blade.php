<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gestión préstamos</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    @if(session('message'))
                        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                            @foreach($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-medium">Todos los préstamos</p>
                    </div>

                    @if($loans->count() === 0)
                        <p class="text-gray-600">No hay préstamos registrados.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead>
                                    <tr class="border-b text-left bg-gray-50">
                                        <th class="py-3 px-4">Usuario</th>
                                        <th class="py-3 px-4">Libro</th>
                                        <th class="py-3 px-4">Estado</th>
                                        <th class="py-3 px-4">Solicitado</th>
                                        <th class="py-3 px-4">Aprobado</th>
                                        <th class="py-3 px-4">Vencimiento</th>
                                        <th class="py-3 px-4">Devuelto</th>
                                        <th class="py-3 px-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($loans as $loan)
                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="font-medium">{{ $loan->user->name ?? '—' }}</div>
                                                <div class="text-xs text-gray-500">{{ $loan->user->email ?? '—' }}</div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="font-medium">{{ $loan->book->title ?? '—' }}</div>
                                                @if($loan->notes)
                                                    <div class="text-xs text-gray-500">Notas: {{ Str::limit($loan->notes, 50) }}</div>
                                                @endif
                                            </td>
                                            <td class="py-3 px-4">
                                                <span class="px-2 py-1 rounded text-xs font-medium
                                                    @if($loan->status === 'pending') bg-yellow-100 text-yellow-800
                                                    @elseif($loan->status === 'approved') bg-green-100 text-green-800
                                                    @elseif($loan->status === 'rejected') bg-red-100 text-red-800
                                                    @elseif($loan->status === 'returned') bg-blue-100 text-blue-800
                                                    @else bg-gray-100 text-gray-800 @endif">
                                                    {{ ucfirst($loan->status) }}
                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                {{ $loan->created_at ? $loan->created_at->format('d/m/Y') : '—' }}
                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                {{ $loan->loaned_at ? \Carbon\Carbon::parse($loan->loaned_at)->format('d/m/Y') : '—' }}
                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                {{ $loan->due_at ? \Carbon\Carbon::parse($loan->due_at)->format('d/m/Y') : '—' }}
                                            </td>
                                            <td class="py-3 px-4 text-xs">
                                                {{ $loan->returned_at ? \Carbon\Carbon::parse($loan->returned_at)->format('d/m/Y') : '—' }}
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex gap-2">
                                                    @if($loan->status === 'pending')
                                                        <form action="{{ route('loans.approve', $loan) }}" method="POST" class="inline">
                                                            @csrf
                                                            <button type="submit" class="text-xs bg-green-600 text-white px-2 py-1 rounded hover:bg-green-700"
                                                                    onclick="return confirm('¿Aprobar préstamo?')">
                                                                Aprobar
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('loans.reject', $loan) }}" method="POST" class="inline">
                                                            @csrf
                                                            <button type="submit" class="text-xs bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700"
                                                                    onclick="return confirm('¿Rechazar préstamo?')">
                                                                Rechazar
                                                            </button>
                                                        </form>
                                                    @elseif($loan->status === 'approved' && $loan->returned_at === null)
                                                        <form action="{{ route('loans.return', $loan) }}" method="POST" class="inline">
                                                            @csrf
                                                            <button type="submit" class="text-xs bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-700"
                                                                    onclick="return confirm('¿Marcar como devuelto?')">
                                                                Devolver
                                                            </button>
                                                        </form>
                                                    @else
                                                        <span class="text-xs text-gray-400">—</span>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6">
                            {{ $loans->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
