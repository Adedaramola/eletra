<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-3xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto px-4 py-8 sm:px-8 bg-white sm:rounded-lg shadow">
                @if (session('status'))
                <div class="bg-green-50 px-4 py-3 rounded-md flex items-center border border-green-100 mb-6">
                    <svg class="w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-4 font-medium text-green-800">
                        {{ session('status') }}
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
                <form action="{{ route('profile.update', auth()->id()) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-label for="name" value="{{ __('Organization name') }}" />
                        <x-input class="block mt-2 w-full" type="text" name="name" id="name"
                            value="{{ Auth::user()->name }}" required />
                    </div>

                    <div class="mt-5">
                        <x-label for="email" value="{{ __('Email address') }}" />
                        <x-input class="block mt-2 w-full" type="email" name="email" id="email"
                            value="{{ Auth::user()->email }}" readonly />
                    </div>

                    <div class="mt-5">
                        <x-label for="new-password" value="{{ __('Current Password') }}" />
                        <x-input id="new-password" class="block mt-2 w-full" type="password" name="new-password"
                            required autocomplete="new-password" />
                    </div>

                    <div class="mt-5">
                        <x-label for="password_confirmation" value="{{ __('New Password') }}" />
                        <x-input id="password_confirmation" class="block mt-2 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="mt-5">
                        <x-label for="password" value="{{ __('Confirm New Password') }}" />
                        <x-input id="password" class="block mt-2 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="pt-6 mt-8 flex justify-end border-t border-gray-200">
                        <x-button>Save</x-button>
                    </div>

                </form>
            </div>

            <div class="max-w-xl mt-8 mx-auto bg-white sm:rounded-lg shadow">
                <div class="px-4 sm:px-8 py-6 space-y-2">
                    <h3 class="text-lg font-medium">Switch Theme</h3>
                    <div class="flex items-center text-sm text-gray-500">
                        <p>Toggle to switch between dark and light mode</p>
                    </div>
                </div>
                <hr>
                <div class="px-4 sm:px-8 py-6 space-y-2">
                    <h3 class="text-red-800 text-lg font-medium">Delete Account</h3>
                    <div class="text-red-600 text-sm">Are you sure you want to delete your account? Once your account is
                        deleted, all of its resources and data will be permanently deleted. Please enter your password
                        to confirm you would like to permanently delete your account.</div>
                    <form action="{{ route('profile.delete') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="flex items-center justify-between">
                            <x-input id="password" class="mt-1 w-full max-w-sm" type="password" name="password" required
                                autocomplete="current-password" />
                            <button type="submit"
                                class="ml-4 inline-flex items-center justify-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-sm text-white tracking-wide hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-300 disabled:opacity-25 transition">{{ __('Delete') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
