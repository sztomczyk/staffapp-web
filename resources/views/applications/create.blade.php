<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj aplikacje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('applications.store') }}">
                        @csrf

                        <!-- Position -->
                        <div>
                            <x-label for="position" :value="__('Stanowisko')" />

                            <x-select class="block mt-1 w-full" name="position_id" id="position" required autofocus>
                                <option value="3" {{ old('position_id') == 3 ? 'selected' : '' }}>[3] Programista React | Koszalin</option>
                            </x-select>
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Imię')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                        </div>

                        <!-- Lastname -->
                        <div class="mt-4">
                            <x-label for="lastname" :value="__('Nazwisko')" />

                            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Nr telefonu')" />

                            <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Adres e-mail')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Message -->
                        <div class="mt-4">
                            <x-label for="message" :value="__('Wiadomość')" />

                            <x-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')" />
                        </div>

                        <!-- Accept policy -->
                        <div class="block mt-4">
                            <label for="accept_policy" class="inline-flex items-center">
                                <input id="accept_policy" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="accept_policy">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Akceptuje politykę prywatności') }}</span>
                            </label>
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('applications') }}">Anuluj</a>
                            <x-button class="ml-4">
                                {{ __('Dodaj aplikacje') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
