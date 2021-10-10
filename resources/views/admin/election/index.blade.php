<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Elections') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($elections->count())
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-1">
                            <x-input class="w-3/4 md:w-1/2" type="text" placeholder="Search by name..." />
                        </div>

                        <a class="inline-flex items-center border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 px-4 py-2"
                            href="{{ route('admin.elections.create') }}">
                            Create Election
                        </a>
                    </div>
                    @foreach ($elections as $election)
                    <div class="flex items-center justify-between bg-white font-medium text-sm px-6 py-4 mb-4 rounded-md shadow">
                        <div>
                            <span>{{ $election->name }}</span>
                            <span class="ml-4 text-gray-500">0 applications</span>
                        </div>
                        <a href="{{ route('admin.elections.show', $election->id) }}" class="text-blue-600 hover:underline">View</a>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="max-w-2xl mx-auto px-4 py-5 space-y-4 text-center bg-white rounded-lg shadow sm:p-6">
                    <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No elections found</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Once you have created an election, it will appear here.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('admin.elections.create') }}" type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Setup an Election
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
