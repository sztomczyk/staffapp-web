<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stanowiska') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-right">
                <a href="{{ route('positions.create') }}"><x-button>Dodaj stanowisko</x-button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse">
                        <thead class="border-b border-gray-100">
                            <tr>
                                <th class="text-left pb-3 pl-3">ID</th>
                                <th class="text-left pb-3 pl-3">Nazwa</th>
                                <th class="text-left pb-3 pl-3">Dział</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($positions as $position)
                                <tr class="divide-x">
                                    <td class="py-3 pl-3">{{ $position->id }}</td>
                                    <td class="py-3 pl-3">{{ $position->name }}</td>
                                    <td class="py-3 pl-3">[{{ $position->department->id }}] {{ $position->department->name }}</td>
                                    <td class="py-3 pl-3 flex">
                                        <a href="{{ route('positions.edit', $position->id) }}">
                                            <x-edit-icon />
                                        </a>
                                        <a href="{{ route('positions.delete', $position->id) }}">
                                            <x-trash-icon />
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
