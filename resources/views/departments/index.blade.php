<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Działy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-right">
                <a href="{{ route('applications.create') }}"><x-button>Dodaj dział</x-button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse">
                        <thead class="border-b border-gray-100">
                            <tr>
                                <th class="text-left pb-3 pl-3">ID</th>
                                <th class="text-left pb-3 pl-3">Dział nadrzędny</th>
                                <th class="text-left pb-3 pl-3">Nazwa</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr class="divide-x">
                                <td class="py-3 pl-3">1</td>
                                <td class="py-3 pl-3">Brak</td>
                                <td class="py-3 pl-3">IT</td>
                                <td class="py-3 pl-3 flex">
                                    <a href="#">
                                        <x-edit-icon />
                                    </a>
                                    <a href="#">
                                        <x-trash-icon />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
