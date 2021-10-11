<x-guest-layout>
    <div class="relative overflow-hidden bg-gray-50">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative h-full mx-auto max-w-7xl">
                <svg class="absolute transform right-full translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"></rect>
                </svg>
                <svg class="absolute transform left-full -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"></rect>
                </svg>
            </div>
        </div>
        <div class="relative pt-6 pb-16 sm:pb-24">
            <div x-data="{ open: false }">
                <div class="px-4 mx-auto max-w-7xl sm:px-6">
                    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center"
                        aria-label="Navigation">
                        <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="/">
                                    <span class="sr-only">Forma</span>
                                    <x-application-logo class="w-10" />
                                </a>
                                <div class="flex items-center -mr-2 md:hidden">
                                    <button x-on:click="open = !open" type="button"
                                        class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md bg-gray-50 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600"
                                        x-bind:aria-expanded="JSON.stringify(open)" aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden space-x-4 md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                            <span class="inline-flex rounded-md shadow">
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center px-4 py-2 text-base font-medium text-blue-600 bg-white border border-transparent rounded-md hover:bg-gray-50">
                                    Log in
                                </a>
                            </span>

                            <span class="inline-flex rounded-md shadow">
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center px-4 py-2 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">
                                    Register
                                </a>
                            </span>
                        </div>
                    </nav>
                </div>
            </div>
            <main class="px-4 mx-auto mt-16 max-w-7xl sm:mt-24">
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                        <span class="block xl:inline">Secure, Cloud-based</span>
                        <span class="block text-blue-600 xl:inline">Elections</span>
                    </h1>
                    <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Save mother Earth! Ballot papers aren't reliable, they even get snatched. Create an election for
                        your organizations in seconds and vote from anywhere. Guess what? They don't get snatched😌
                    </p>
                    <div class="max-w-md mx-auto mt-5 sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-xl shadow">
                            <a href="{{ route('register') }}"
                                class="flex items-center justify-center w-full px-6 py-3 text-base font-medium text-white bg-blue-600 border border-transparent rounded-xl hover:bg-blue-700 md:py-4 md:text-lg md:px-8">
                                Get started for free!
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="relative py-10 bg-white sm:py-12 lg:py-16">
        <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-blue-600 uppercase">Simple elections. Any device. Any
                Location</h2>
            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Elections shouldn't cost that much
            </p>
            <p class="mx-auto mt-5 text-xl text-gray-500 max-w-prose">
                You're forever in control of Polley. It's easy and inexpensive to build and customize an election.
            </p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 text-left">
                    <div class="mt-10 lg:mt-0">
                        <div class="flex items-center justify-center w-12 h-12 text-white bg-blue-600 rounded-md">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-5">
                            <h5 class="text-lg font-medium leading-6 text-gray-900">User impersonation</h5>
                            <p class="mt-2 text-base leading-6 text-gray-600">
                                Want to impersonate a user inside a tenant's database from the central context? Or even
                                from another tenant's context? Just enable the user impersonation feature in the config.
                            </p>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-0">
                        <div class="flex items-center justify-center w-12 h-12 text-white bg-blue-600 rounded-md">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-5">
                            <h5 class="text-lg font-medium leading-6 text-gray-900">User impersonation</h5>
                            <p class="mt-2 text-base leading-6 text-gray-600">
                                Want to impersonate a user inside a tenant's database from the central context? Or even
                                from another tenant's context? Just enable the user impersonation feature in the config.
                            </p>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-0">
                        <div class="flex items-center justify-center w-12 h-12 text-white bg-blue-600 rounded-md">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-5">
                            <h5 class="text-lg font-medium leading-6 text-gray-900">User impersonation</h5>
                            <p class="mt-2 text-base leading-6 text-gray-600">
                                Want to impersonate a user inside a tenant's database from the central context? Or even
                                from another tenant's context? Just enable the user impersonation feature in the config.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-12 bg-gray-50 sm:pt-16">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold leading-9 text-gray-900 sm:text-4xl sm:leading-10">
                    Trusted by humans
                </h2>
                <p class="mt-3 text-xl leading-7 text-gray-600 sm:mt-4">
                    This app powers many successfull elections in many different successfull organizations.
                </p>
            </div>
        </div>
        <div class="pb-12 mt-10 bg-gray-50 sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="bg-white rounded-lg shadow-lg sm:grid sm:grid-cols-3">
                            <div class="flex flex-col p-6 text-center border-b border-gray-100 sm:border-0 sm:border-r">
                                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500" id="item-1">
                                    Total Elections
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold leading-none text-blue-600"
                                    aria-describedby="item-1">
                                    0
                                </dd>
                            </div>
                            <div
                                class="flex flex-col p-6 text-center border-t border-b border-gray-100 sm:border-0 sm:border-l sm:border-r">
                                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                    Registered Voters
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold leading-none text-blue-600">
                                    0
                                </dd>
                            </div>
                            <div class="flex flex-col p-6 text-center border-t border-gray-100 sm:border-0 sm:border-l">
                                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                    Sponsors &lt;3
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold leading-none text-blue-600">
                                    0
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-gray-800">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-base text-center text-gray-500">
                    Made by <a href="#" class="text-gray-400">Adedaramola</a>. © 2021 All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</x-guest-layout>
