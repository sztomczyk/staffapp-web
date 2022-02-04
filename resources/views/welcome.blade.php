<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logowanie</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <x-application-logo />
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg divide-y">
                    @foreach ($offers as $offer)
                        <div class="flex items-center w-100 divide-x">
                            <div class="basis-1/5 p-4 bg-gray-50">
                                <div class="text-xl font-medium">{{ $offer->position->name }}</div>
                                <div>{{ $offer->location }}</div>
                            </div>
                            <div class="p-4">
                                <div class="text-sm uppercase opacity-50">Plan pracy</div>
                                <div>{{ $offer->work_plan }}</div>
                            </div>
                            <div class="p-4">
                                <div class="text-sm uppercase opacity-50">Tryb pracy</div>
                                <div>{{ $offer->work_mode }}</div>
                            </div>
                            <div class="p-4">
                                <div class="text-sm uppercase opacity-50">Typ kontraktu</div>
                                <div>{{ $offer->contract_type }}</div>
                            </div>
                            <div class="p-4">
                                <div class="text-sm uppercase opacity-50">Tryb rekrutacji</div>
                                <div>{{ $offer->recruitment_type }}</div>
                            </div>
                            <div class="p-4">
                                <div class="text-sm uppercase opacity-50">Wymagania</div>
                                <div>
                                    @foreach ($offer->requirements as $requirement)
                                        <div>{{ $requirement->name }} [Poziom {{ $requirement->level }}]</div>
                                    @endforeach    
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-sm uppercase opacity-50">Wynagrodzenie</div>
                                <div>@if($offer->salary_to == null && $offer->salary_from != null) Od @endif {{ $offer->salary_from }} {{ $offer->salary_from && $offer->salary_to ? '-' : '' }} @if($offer->salary_from == null && $offer->salary_to != null) Do @endif {{ $offer->salary_to }} {{ !$offer->salary_from && !$offer->salary_to ? 'Brak informacji' : '' }}</div>
                            </div>
                            <div class="p-4">
                                <x-button class="bg-green-500 hover:bg-green-600">Aplikuj</x-button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
                            <form method="POST" action="{{ route('requirements.store') }}">
                                @csrf
        
                                <!-- Offer -->
                                <!-- Name -->
                                <div class="mt-4">
                                    <x-label for="name" :value="__('Nazwa')" />
        
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                                </div>
        
                                <div class="flex items-center justify-end mt-4">
                                    <a href="{{ route('requirements') }}">Anuluj</a>
                                    <x-button class="ml-4">
                                        {{ __('Dodaj wymaganie') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
