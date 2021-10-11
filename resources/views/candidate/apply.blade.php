<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-application-logo class="w-12" />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form action="{{ route('candidate.apply') }}" method="post">
            @csrf
            <input type="hidden" name="election_id" value="{{ request()->election_id }}">
            <div>
                <x-label for="position" value="{{ __('Position') }}" />
                <x-input id="position" class="block mt-1 w-full" type="text" name="position"
                    value="{{ request()->position }}" readonly />
            </div>
            <div class="mt-4">
                <x-label for="name" value="{{ __('Candidate name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email address') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ request()->email }}"
                    readonly />
            </div>

            <div class="mt-4">
                <x-label for="candidate_code" value="{{ __('Join code') }}" />
                <x-input id="candidate_code" class="block mt-1 w-full" type="text" name="candidate_code"
                    value="{{ request()->candidate_code }}" readonly />
            </div>

            <div class="mt-4">
                <x-label for="manifesto" value="{{ __('Manifesto') }}" />
                <textarea name="manifesto" id="manifesto" cols="30" rows="5" class="block w-full border-gray-300 rounded-md mt-2"></textarea>
            </div>

            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to all :electoral_policy', [
                            'electoral_policy' => '<a target="_blank" href="'.route('login').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Electoral Policies').'</a>'
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Join Election') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
