<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $election->name }}
        </h2>
    </x-slot>
    <x-slot name="header2">
        <nav class="flex space-x-6" aria-label="Tabs">
            <x-sub-link href="{{ route('elections.show', $election->id) }}"
                :active="request()->routeIs('elections.show')">
                {{ __('Summary') }}
            </x-sub-link>

            <x-sub-link href="{{ route('elections.application', $election->id) }}"
                :active="request()->routeIs('elections.application')">
                {{ __('Applications') }}
            </x-sub-link>
            <x-sub-link href="{{ route('elections.settings', $election->id) }}"
                :active="request()->routeIs('elections.settings')">
                {{ __('Settings') }}
            </x-sub-link>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="max-w-2xl mx-auto px-4 py-5 space-y-4 text-center bg-white sm:rounded-lg shadow sm:p-6">
                    <p class="mt-1 text-gray-500">
                        Once you have added a candidate, they will appear here.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('candidate', $election->id) }}" type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Add Candidates</span>
                        </a>
                    </div>
                </div>

                <div class="max-w-2xl mx-auto mt-6 px-4 sm:px-0">
                    @if ($election->candidates->count())
                    @foreach ($election->candidates as $candidate)
                    <div class="flex items-center justify-between bg-white px-6 py-4 rounded-md shadow text-sm font-medium mb-3">
                        <div class="truncate">{{ $candidate->name }} - <span class="text-gray-500">{{ $candidate->position }}</span>
                        </div>
                        <div class="inline-flex items-center">
                            <a href="#" class="text-blue-600">View</a>
                            <a href="#" class="text-red-600 ml-3">Delete</a>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="bg-white px-4 py-3 rounded-md shadow text-gray-500">
                        No candidate found
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
