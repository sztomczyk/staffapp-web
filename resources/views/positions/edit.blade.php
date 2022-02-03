<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edytuj stanowisko') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('positions.update') }}">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="position_id" value="{{ $position->id }}">

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nazwa')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $position->name }}" required autofocus/>
                        </div>

                        <!-- Department -->
                        <div class="mt-4">
                            <x-label for="department" :value="__('Dział')" />

                            <x-select class="block mt-1 w-full" name="department_id" id="department">
                                @foreach ($departments as $d)
                                    <option value="{{ $d->id }}" {{ $position->department_id == $d->id ? 'selected' : '' }}>[{{ $d->id }}] {{ $d->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('positions') }}">Anuluj</a>
                            <x-button class="ml-4">
                                {{ __('Edytuj stanowisko') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
