<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('elections') }}" :active="request()->routeIs('elections')">
                        {{ __('Elections') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button type="button"
                                class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-blue-100 text-blue-700  text-md leading-4 font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition">
                                {{ Str::substr(Auth::user()->name, 0, 2) }}
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="#">
                                {{ __('Billing') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('profile') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form action="{{ route('logout') }}" method="post">
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
