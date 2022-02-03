<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj wymaganie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('requirements.store') }}">
                        @csrf

                        <!-- Offer -->
                        <div>
                            <x-label for="offer" :value="__('Oferta')" />

                            <x-select class="block mt-1 w-full" name="offer_id" id="offer">
                                @foreach ($offers as $offer)
                                    <option value="{{ $offer->id }}">[{{ $offer->id }}] {{ $offer->position->name }} {{ $offer->location }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nazwa')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                        </div>

                        <!-- Level -->
                        <div class="mt-4">
                            <x-label for="level" :value="__('Poziom')" />

                            <x-select class="block mt-1 w-full" name="level" id="level">
                                <option value="1">@for($i = 0; $i < 1; $i++) &#11088; @endfor [1]</option>
                                <option value="2">@for($i = 0; $i < 2; $i++) &#11088; @endfor [2]</option>
                                <option value="3">@for($i = 0; $i < 3; $i++) &#11088; @endfor [3]</option>
                                <option value="4">@for($i = 0; $i < 4; $i++) &#11088; @endfor [4]</option>
                                <option value="5">@for($i = 0; $i < 5; $i++) &#11088; @endfor [5]</option>
                            </x-select>
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
</x-app-layout>
