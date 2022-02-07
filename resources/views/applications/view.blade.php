<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zobacz aplikacje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Parent -->
                        <div>
                            <x-label for="offer" :value="__('Oferta')" />

                            <div >[{{ $application->offer->id }}] {{ $application->offer->position->name }} {{ $application->offer->location }}</div>
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Imię')" />

                            <div>{{ $application->name }}</div>
                        </div>

                        <!-- Lastname -->
                        <div class="mt-4">
                            <x-label for="lastname" :value="__('Nazwisko')" />

                            <div>{{ $application->lsatname }}</div>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('E-mail')" />

                            <div>{{ $application->email }}</div>
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Numer telefonu')" />

                            <div>{{ $application->phone }}</div>
                        </div>

                        <!-- Message -->
                        <div class="mt-4">
                            <x-label for="message" :value="__('Wiadomość')" />

                            <div>{{ $application->message }}</div>
                        </div>

                        <!-- CV Url -->
                        <div class="mt-4">
                            <x-label for="cv_url" :value="__('CV URL')" />

                            <div>{{ $application->cv_url }}</div>
                        </div>

                        <!-- CV Url -->
                        <div class="mt-4">
                            <x-label for="accepted_policy" :value="__('Akceptuje politykę prywatności')" />

                            <div>{{ $application->accepted_policy ? 'Tak' : 'Nie' }}</div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('applications') }}">Wróć</a>
                            <a href="{{ route('applications.edit', $application->id) }}">
                                <x-button class="ml-4">
                                    {{ __('Edytuj') }}
                                </x-button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
