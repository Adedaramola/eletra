<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h3 class="text-lg font-medium leading-6">Activity Overview</h3>
                <dl class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-3">
                    <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                        <dt class="text-sm text-gray-500 font-medium truncate">Total Elections</dt>
                        <dd class="mt-1 text-3xl font-semibold">
                            {{ $user->elections->count() }}
                        </dd>
                    </div>
                    <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                        <dt class="text-sm text-gray-500 font-medium truncate">Ongoing Elections</dt>
                        <dd class="mt-1 text-3xl font-semibold">
                            0
                        </dd>
                    </div>
                    <div class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6">
                        <dt class="text-sm text-gray-500 font-medium truncate">Registered Voters</dt>
                        <dd class="mt-1 text-3xl font-semibold">
                            {{ $user->voters->count() }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
