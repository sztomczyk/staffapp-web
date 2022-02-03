<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj dział') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('departments.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nazwa')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                        </div>

                        <!-- Parent -->
                        <div class="mt-4">
                            <x-label for="parent" :value="__('Dział nadrzędny')" />

                            <x-select class="block mt-1 w-full" name="parent_id" id="parent">
                                <option value="0" default>Brak</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">[{{ $department->id }}] {{ $department->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('departments') }}">Anuluj</a>
                            <x-button class="ml-4">
                                {{ __('Dodaj dział') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
