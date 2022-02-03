<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edytuj aplikacje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('applications.update') }}">
                        @csrf
                        @method('put')

                        <input type="hidden" name="application_id" value="{{ $application->id }}">

                        <!-- Offer -->
                        <div>
                            <x-label for="offer" :value="__('Oferta')" />

                            <x-select class="block mt-1 w-full" name="offer_id" id="offer">
                                @foreach ($offers as $offer)
                                    <option value="{{ $offer->id }}" {{ $offer->id == $application->offer_id ? 'selected' : '' }}>[{{ $offer->id }}] {{ $offer->position->name }} {{ $offer->location }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Imię')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $application->name }}" required autofocus/>
                        </div>

                        <!-- Lastname -->
                        <div class="mt-4">
                            <x-label for="lastname" :value="__('Nazwisko')" />

                            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" value="{{ $application->lastname }}" required />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('E-mail')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $application->email }}" required />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Numer telefonu')" />

                            <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" value="{{ $application->phone }}" required />
                        </div>

                        <!-- Message -->
                        <div class="mt-4">
                            <x-label for="message" :value="__('Wiadomość')" />

                            <x-textarea id="message" class="block mt-1 w-full" type="text" name="message">{{ $application->message }}</x-textarea>
                        </div>

                        <!-- CV Url -->
                        <div class="mt-4">
                            <x-label for="cv_url" :value="__('CV URL')" />

                            <x-input id="cv_url" class="block mt-1 w-full" type="text" name="cv_url" value="{{ $application->cv_url }}" required />
                        </div>

                        <!-- Policy is accepted -->
                        <div class="block mt-4">
                            <label for="accepted_policy" class="inline-flex items-center">
                                <input {{ $application->accepted_policy ? 'checked' : '' }} id="accepted_policy" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="accepted_policy" required>
                                <span class="ml-2 text-sm text-gray-600">{{ __('Akceptuje politykę prywatności ') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('applications') }}">Anuluj</a>
                            <x-button class="ml-4">
                                {{ __('Edytuj aplikacje') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
