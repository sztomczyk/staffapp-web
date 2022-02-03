<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pracownicy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-right">
                <a href="{{ route('employees.create') }}"><x-button>Dodaj pracownika</x-button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse">
                        <thead class="border-b border-gray-100">
                            <tr>
                                <th class="text-left pb-3 pl-3">ID</th>
                                <th class="text-left pb-3 pl-3">Stanowisko</th>
                                <th class="text-left pb-3 pl-3">Imię</th>
                                <th class="text-left pb-3 pl-3">Nazwisko</th>
                                <th class="text-left pb-3 pl-3">E-mail</th>
                                <th class="text-left pb-3 pl-3">Nr telefonu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($employees as $employee)
                                <tr class="divide-x">
                                    <td class="py-3 pl-3">{{ $employee->id }}</td>
                                    <td class="py-3 pl-3">{{ $employee->position->name }}</td>
                                    <td class="py-3 pl-3">{{ $employee->name }}</td>
                                    <td class="py-3 pl-3">{{ $employee->lastname }}</td>
                                    <td class="py-3 pl-3">{{ $employee->email }}</td>
                                    <td class="py-3 pl-3">{{ $employee->phone }}</td>
                                    <td class="py-3 pl-3 flex">
                                        <a href="{{ route('employees.edit', $employee->id) }}">
                                            <x-edit-icon />
                                        </a>
                                        <a href="{{ route('employees.delete', $employee->id) }}">
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
