<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj ofertę') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('offers.store') }}">
                        @csrf

                        <!-- Parent -->
                        <div>
                            <x-label for="position" :value="__('Stanowisko')" />

                            <x-select class="block mt-1 w-full" name="position_id" id="position">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">[{{ $position->id }}] {{ $position->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <!-- Location -->
                        <div class="mt-4">
                            <x-label for="location" :value="__('Lokalizacja')" />

                            <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required/>
                        </div>

                        <!-- Work plan -->
                        <div class="mt-4">
                            <x-label for="work_plan" :value="__('Plan pracy')" />

                            <x-input id="work_plan" class="block mt-1 w-full" type="text" name="work_plan" :value="old('work_plan')" required />
                        </div>

                        <!-- Work mode -->
                        <div class="mt-4">
                            <x-label for="work_mode" :value="__('Tryb pracy')" />

                            <x-input id="work_mode" class="block mt-1 w-full" type="text" name="work_mode" :value="old('work_mode')" required />
                        </div>

                        <!-- Contract type -->
                        <div class="mt-4">
                            <x-label for="contract_type" :value="__('Typ kontraktu')" />

                            <x-input id="contract_type" class="block mt-1 w-full" type="text" name="contract_type" :value="old('contract_type')" required />
                        </div>

                        <!-- Recruitment type -->
                        <div class="mt-4">
                            <x-label for="recruitment_type" :value="__('Tryb rekrutacji')" />

                            <x-input id="recruitment_type" class="block mt-1 w-full" type="text" name="recruitment_type" :value="old('recruitment_type')" required />
                        </div>

                        <!-- Salary from -->
                        <div class="mt-4">
                            <x-label for="salary_from" :value="__('Stawka od')" />

                            <x-input id="salary_from" class="block mt-1 w-full" type="text" name="salary_from" :value="old('salary_from')" />
                        </div>

                        <!-- Salary to -->
                        <div class="mt-4">
                            <x-label for="salary_to" :value="__('Stawka do')" />

                            <x-input id="salary_to" class="block mt-1 w-full" type="text" name="salary_to" :value="old('salary_to')" />
                        </div>

                        <!-- Expires at -->
                        <div class="mt-4">
                            <x-label for="expires_at" :value="__('Oferta wygasa')" />

                            <x-input id="expires_at" class="block mt-1 w-full" type="date" name="expires_at" min="{{ Carbon\Carbon::now()->addDay(1)->format('Y-m-d') }}" value="{{ Carbon\Carbon::now()->addMonth(1)->format('Y-m-d') }}" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('offers') }}">Anuluj</a>
                            <x-button class="ml-4">
                                {{ __('Dodaj ofertę') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
