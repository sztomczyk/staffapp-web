<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aplikacje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-right">
                <a href="{{ route('applications.create') }}"><x-button>Dodaj aplikacje</x-button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse">
                        <thead class="border-b border-gray-100">
                            <tr>
                                <th class="text-left pb-3 pl-3">ID</th>
                                <th class="text-left pb-3 pl-3">Stanowisko</th>
                                <th class="text-left pb-3 pl-3">Imię i nazwisko</th>
                                <th class="text-left pb-3 pl-3">Nr telefonu</th>
                                <th class="text-left pb-3 pl-3">E-mail</th>
                                <th class="text-left pb-3 pl-3">Akceptuje zgody</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($applications as $application)
                                <tr class="divide-x">
                                    <td class="py-3 pl-3">{{ $application->id }}</td>
                                    <td class="py-3 pl-3">{{ $application->offer->position->name }} {{ $application->offer->location }}</td>
                                    <td class="py-3 pl-3">{{ $application->name }} {{ $application->lastname }}</td>
                                    <td class="py-3 pl-3">{{ $application->phone }}</td>
                                    <td class="py-3 pl-3">{{ $application->email }}</td>
                                    <td class="py-3 pl-3">{{ $application->accepted_policy ? 'Tak' : 'Nie' }}</td>
                                    <td class="py-3 pl-3 flex">
                                        <a class="mr-1" href="{{ route('applications.view', $application->id) }}">
                                            <x-view-icon />
                                        </a>
                                        <a class="mr-1" href="{{ route('applications.edit', $application->id) }}">
                                            <x-edit-icon />
                                        </a>
                                        <a class="mr-1" href="{{ route('applications.delete', $application->id) }}">
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
