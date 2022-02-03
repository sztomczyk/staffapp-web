<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edytuj pracownika') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('employees.update') }}">
                        @csrf
                        @method('put')

                        <input type="hidden" name="employee_id" value="{{ $employee->id }}">

                        <!-- Parent -->
                        <div>
                            <x-label for="position" :value="__('Stanowisko')" />

                            <x-select class="block mt-1 w-full" name="position_id" id="position">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ $position->id == $employee->position_id ? 'selected' : '' }}>[{{ $position->id }}] {{ $position->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Imię')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $employee->name }}" required autofocus/>
                        </div>

                        <!-- Lastname -->
                        <div class="mt-4">
                            <x-label for="lastname" :value="__('Nazwisko')" />

                            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" value="{{ $employee->lastname }}" required />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('E-mail')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $employee->email }}" required />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Numer telefonu')" />

                            <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" value="{{ $employee->phone }}" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('employees') }}">Anuluj</a>
                            <x-button class="ml-4">
                                {{ __('Edytuj pracownika') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
