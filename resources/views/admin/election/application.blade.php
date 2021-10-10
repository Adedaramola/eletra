<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $election->name }}
        </h2>
    </x-slot>
    <x-slot name="header2">
        <nav class="flex space-x-6" aria-label="Tabs">
            <x-sub-link href="{{ route('admin.elections.show', $election->id) }}" :active="request()->routeIs('admin.elections.show')">
                {{ __('Summary') }}
            </x-sub-link>

            <x-sub-link href="{{ route('admin.elections.application', $election->id) }}" :active="request()->routeIs('admin.elections.application')">
                {{ __('Applications') }}
            </x-sub-link>
            <x-sub-link href="{{ route('admin.elections.settings', $election->id) }}" :active="request()->routeIs('admin.elections.settings')">
                {{ __('Settings') }}
            </x-sub-link>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
        </div>
    </div>
</x-app-layout>
