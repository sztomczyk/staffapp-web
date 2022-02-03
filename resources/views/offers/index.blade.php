<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Oferty') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5 text-right">
                <a href="{{ route('offers.create') }}"><x-button>Dodaj ofertę</x-button></a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse">
                        <thead class="border-b border-gray-100">
                            <tr>
                                <th class="text-left pb-3 pl-3">ID</th>
                                <th class="text-left pb-3 pl-3">Stanowisko</th>
                                <th class="text-left pb-3 pl-3">Lokalizacja</th>
                                <th class="text-left pb-3 pl-3">Plan pracy</th>
                                <th class="text-left pb-3 pl-3">Tryb pracy</th>
                                <th class="text-left pb-3 pl-3">Typ kontraktu</th>
                                <th class="text-left pb-3 pl-3">Tryb rekrutacji</th>
                                <th class="text-left pb-3 pl-3">Stawka</th>
                                <th class="text-left pb-3 pl-3">Oferta wygasa</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($offers as $offer)
                                <tr class="divide-x">
                                    <td class="py-3 pl-3">{{ $offer->id }}</td>
                                    <td class="py-3 pl-3">{{ $offer->position->name }}</td>
                                    <td class="py-3 pl-3">{{ $offer->location }}</td>
                                    <td class="py-3 pl-3">{{ $offer->work_plan }}</td>
                                    <td class="py-3 pl-3">{{ $offer->work_mode }}</td>
                                    <td class="py-3 pl-3">{{ $offer->contract_type }}</td>
                                    <td class="py-3 pl-3">{{ $offer->recruitment_type }}</td>
                                    <td class="py-3 pl-3">@if($offer->salary_to == null && $offer->salary_from != null) Od @endif {{ $offer->salary_from }} {{ $offer->salary_from && $offer->salary_to ? '-' : '' }} @if($offer->salary_from == null && $offer->salary_to != null) Do @endif {{ $offer->salary_to }} {{ !$offer->salary_from && !$offer->salary_to ? 'Brak informacji' : '' }}</td>
                                    <td class="py-3 pl-3">{{ Carbon\Carbon::parse($offer->expires_at)->format('d.m.Y') }}</td>
                                    <td class="py-3 pl-3 flex">
                                        <a href="{{ route('offers.edit', $offer->id) }}">
                                            <x-edit-icon />
                                        </a>
                                        <a href="{{ route('offers.delete', $offer->id) }}">
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
