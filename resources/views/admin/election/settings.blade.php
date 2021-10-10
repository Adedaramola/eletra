<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $election->name }}
        </h2>
    </x-slot>
    <x-slot name="header2">
        <nav class="flex space-x-6" aria-label="Tabs">
            <x-sub-link href="{{ route('admin.elections.show', $election->id) }}"
                :active="request()->routeIs('admin.elections.show')">
                {{ __('Summary') }}
            </x-sub-link>

            <x-sub-link href="{{ route('admin.elections.application', $election->id) }}"
                :active="request()->routeIs('admin.elections.application')">
                {{ __('Applications') }}
            </x-sub-link>
            <x-sub-link href="{{ route('admin.elections.settings', $election->id) }}"
                :active="request()->routeIs('admin.elections.settings')">
                {{ __('Settings') }}
            </x-sub-link>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <form action="" method="POST">
                        <x-button>Import voters</x-button>
                    </form>
                </div>
                <hr>
                <div class="px-4 py-5 sm:p-6 space-y-3">
                    <h3 class="text-lg font-medium">Collaborate with others</h3>
                    <div class="text-sm text-gray-500">Add a new team member to your team, allowing them to collaborate
                        with you. Names of team members will appear here.</div>
                    <form action="" method="POST">
                        <div class="flex items-center max-w-sm">
                            <input type="text"
                                class="w-full h-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">
                            <button type="submit"
                                class="inline-flex items-center justify-center px-4 py-2 h-full bg-blue-600 border border-transparent rounded-r-md font-semibold text-sm text-white tracking-wide hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-300 disabled:opacity-25 transition" disabled>
                                <svg class="w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span class="ml-3">Invite</span>
                            </button>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="px-4 py-5 sm:p-6 space-y-3">
                    <h3 class="text-red-800 text-lg font-medium">Delete Election</h3>
                    <div class="text-red-600 text-sm">Are you sure you want to delete this election? Once the election
                        is deleted, all of its resources and data will be permanently deleted. Please enter your
                        password to confirm you would like to permanently delete the election.</div>
                    <form action="" method="post">
                        <div class="flex items-center">
                            <x-input id="password" class="mt-1 w-full max-w-sm" type="password" name="password" required
                                autocomplete="current-password" />
                            <button type="submit"
                                class="ml-4 inline-flex items-center justify-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-sm text-white tracking-wide hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-300 disabled:opacity-25 transition">{{ __('Delete Election') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
