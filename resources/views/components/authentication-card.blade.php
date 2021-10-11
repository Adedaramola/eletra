<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="mt-8">
        <a href="/">
            {{ $logo }}
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 mb-8 px-8 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
