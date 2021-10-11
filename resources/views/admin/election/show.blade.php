<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $election->name }}
        </h2>
    </x-slot>
    <x-slot name="header2">
        <nav class="flex space-x-4" aria-label="Tabs">
            <x-sub-link href="{{ route('elections.show', $election->id) }}" :active="request()->routeIs('elections.show')">
                {{ __('Summary') }}
            </x-sub-link>

            <x-sub-link href="{{ route('elections.application', $election->id) }}" :active="request()->routeIs('elections.application')">
                {{ __('Applications') }}
            </x-sub-link>
            <x-sub-link href="{{ route('elections.settings', $election->id) }}" :active="request()->routeIs('elections.settings')">
                {{ __('Settings') }}
            </x-sub-link>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-start p-4 border border-yellow-100 sm:rounded-md bg-yellow-50">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                </div>

                <div class="ml-3">
                    <p class="text-sm font-medium text-yellow-800">
                        You can only import up to 50 voters for the free version. <a href="/billing" class="underline">Upgrade your plan now</a>
                    </p>
                </div>
            </div>
            <div class="py-12 lg:py-6">
                <div class="overflow-hidden sm:rounded-lg bg-white">
                    <div class="px-4 py-5 sm:p-6 space-y-4">
                        <div class="space-y-2">
                            <p class="font-medium leading-loose">Your live election url is:</p>
                            <div class="flex items-center justify-between w-full space-x-4">
                                <input class="rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 flex-1 text-sm text-gray-600" type="text" readonly="readonly" value="">
                                <x-button>Copy</x-button>
                            </div>
                        </div>
                        <div class="text-gray-700">All activities regarding your election can be access through this url. Consider sharing this link among all participants in the election. Find all other election details below.</div>
                    </div>
                    <hr>
                    <div class="px-4 py-5 sm:p-6 space-y-4">
                        <div class="font-medium">Join code: <code class="inline-block px-2 py-px mx-1 text-sm font-medium text-gray-700 bg-gray-100 border-b-2 border-gray-200 rounded">{{ $election->join_code }}</code></div>
                        <div class="font-medium">Candidate's code: <code class="inline-block px-2 py-px mx-1 text-sm font-medium text-gray-700 bg-gray-100 border-b-2 border-gray-200 rounded">{{ $election->candidate_code }}</code></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
