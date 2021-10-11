<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-application-logo class="w-12" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Enter your unique election id and the join code sent to your email to participate. Contact your electoral admin for more information.') }}
        </div>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif


        <form action="" method="post">
            @csrf

            <div class="block">
                <x-label for="join_code" value="{{ __('Join Code') }}" />
                <x-input id="join_code" class="block mt-1 w-full" type="text" name="join_code" :value="old('join_code')"
                    required autofocus />
            </div>

            <div class="block mt-4">
                <x-label for="election_id" value="{{ __('Election ID') }}" />
                <x-input id="election_id" class="block mt-1 w-full" type="text" name="election_id"
                    :value="old('election_id')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Cast vote') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
