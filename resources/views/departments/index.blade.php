<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Działy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-right">
                <a href="{{ route('departments.create') }}"><x-button>Dodaj dział</x-button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse">
                        <thead class="border-b border-gray-100">
                            <tr>
                                <th class="text-left pb-3 pl-3">ID</th>
                                <th class="text-left pb-3 pl-3">Nazwa</th>
                                <th class="text-left pb-3 pl-3">Dział nadrzędny</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($departments as $department)
                                <tr class="divide-x">
                                    <td class="py-3 pl-3">{{ $department->id }}</td>
                                    <td class="py-3 pl-3">{{ $department->name }}</td>
                                    <td class="py-3 pl-3">{{ !$department->parent ? 'Brak' : $department->parent->name }}</td>
                                    <td class="py-3 pl-3 flex">
                                        <a href="{{ route('departments.edit', $department->id) }}">
                                            <x-edit-icon />
                                        </a>
                                        <a href="{{ route('departments.delete', $department->id) }}">
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
