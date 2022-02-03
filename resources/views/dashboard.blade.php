<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 gap-4">
                    <a href="{{ route('applications') }}">
                        <div class="border border-gray-300 rounded-md text-center p-5 hover:bg-gray-100">
                            Aplikacje
                        </div>
                    </a>
                    <a href="{{ route('offers') }}">
                        <div class="border border-gray-300 rounded-md text-center p-5 hover:bg-gray-100">
                            Oferty
                        </div>
                    </a>
                    <a href="{{ route('requirements') }}">
                        <div class="border border-gray-300 rounded-md text-center p-5 hover:bg-gray-100">
                            Wymagania
                        </div>
                    </a>
                    <a href="{{ route('employees') }}">
                        <div class="border border-gray-300 rounded-md text-center p-5 hover:bg-gray-100">
                            Pracownicy
                        </div>
                    </a>
                    <a href="{{ route('positions') }}">
                        <div class="border border-gray-300 rounded-md text-center p-5 hover:bg-gray-100">
                            Stanowiska
                        </div>
                    </a>
                    <a href="{{ route('departments') }}">
                        <div class="border border-gray-300 rounded-md text-center p-5 hover:bg-gray-100">
                            Działy
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
