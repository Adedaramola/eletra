<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Boomba') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-5xl mx-auto p-4 sm:py-6 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        @if (isset($header2))
        <header class="bg-white shadow border-t border-gray-100">
            <div class="max-w-5xl mx-auto p-4 sm:py-6 sm:px-6 lg:px-8">
                {{ $header2 }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <button x-data="{}" x-on:click="window.livewire.emitTo('feedback-modal','show')"
        class="fixed z-0 p-4 bg-blue-600 rounded-full shadow-sm bottom-4 right-4 md:bottom-12 md:right-12 hover:bg-blue-700 focus:bg-blue-700"
        title="Provide Feedback">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                clip-rule="evenodd"></path>
        </svg>
    </button>

    @livewire('feedback-modal')

    @livewireScripts
</body>

</html>
