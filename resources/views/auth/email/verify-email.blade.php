<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-application-logo class="w-12" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex flex-col items-center justify-center">
            <form action="{{ route('verification.send') }}" method="post">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form action="{{ route('logout') }}" method="post">
                @csrf

                <button type="submit" class="mt-4 underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
