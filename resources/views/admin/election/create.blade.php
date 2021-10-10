<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Election') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <form action="{{ route('elections.create') }}" method="POST"
                class="max-w-xl p-8 mx-auto space-y-8 bg-white rounded-lg shadow">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input class="block mt-2 w-full" type="text" name="name" id="name" required />
                </div>
                <div class="mt-4">
                    <x-label for="description" value="{{ __('Description') }}" />
                    <x-textarea class="block w-full mt-2" name="description" id="description">
                    </x-textarea>
                    <p class="mt-2 text-sm text-gray-500">Provide a brief description about the election. This will
                        appear to
                        all participants.</p>
                </div>
                <div class="mt-4">
                    <x-label for="contestable_categories" value="{{ __('Number of contestable categories') }}" />
                    <x-input id="contestable_categories" class="block mt-2 w-full" type="text"
                        name="contestable_categories" id="contestable_categories" required />
                </div>
                <div class="mt-4 grid grid-cols-2 gap-5">
                    <div class="col-span-1">
                        <x-label for="start_at" value="{{ __('Start time') }}" />
                        <x-input id="start_at" class="block mt-2 w-full" type="date" name="start_at"
                            :value="old('start_at')" required />
                    </div>
                    <div class="col-span-1">
                        <x-label for="stop_at" value="{{ __('Stop time') }}" />
                        <x-input id="stop_at" class="block mt-2 w-full" type="date" name="stop_at"
                            :value="old('stop_at')" required />
                    </div>
                </div>

                <div class="hidden sm:block">
                    <div class="py-1">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <x-button class="ml-4">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
