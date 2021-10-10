<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Election') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto p-8 bg-white rounded-lg shadow">
                @if (session('status'))
                <div class="bg-green-50 px-4 py-3 rounded-md flex items-center border border-green-100 mb-6">
                    <svg class="w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-4 font-medium text-green-800">
                        {{  session('status')}}
                    </span>
                    <button class="ml-auto">
                        <svg class="w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                @endif

                <form action="{{ route('candidate', $election->id) }}" method="POST">
                    @csrf

                    <div>
                        <x-label for="name" value="{{ __('Candidate Name') }}" />
                        <x-input class="block mt-2 w-full" type="text" name="name" id="name" required />
                    </div>
                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email address') }}" />
                        <x-input id="email" class="block mt-2 w-full" type="email" name="email" id="email" required />
                    </div>
                    <div class="mt-4">
                        <x-label for="position" value="{{ __('Position vying for') }}" />
                        <x-input id="position" class="block mt-2 w-full" type="text" name="position" id="position"
                            required />
                    </div>

                    <div class="flex justify-end mt-5">
                        <x-button class="ml-4">
                            {{ __('Add Candidate') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
