<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-application-logo class="w-12" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Enter the election unique identification number to participate. Contact your electoral admin for more information.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        <form action="" method="post">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Election ID') }}" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="block mt-4">
                <x-label for="email" value="{{ __('Email address') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Join vote') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
