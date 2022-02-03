<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuń dział') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <div class="text-xl">Usuwasz dział, jesteś tego pewny/-a?</div>
                        <div class="flex justify-center mt-3">
                            <a href="{{ route('departments') }}"><x-button>Anuluj</x-button></a>
                            <form class="ml-3" action="{{ route('departments.destroy') }}" method="POST">
                                @csrf
                                @method('delete')

                                <input type="hidden" name="departmentId" value="{{ $departmentId }}">
                                
                                <x-button class="bg-red-600">Usuń</x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

