<div>
    <x-modal wire:model="show">
        <form action="">
            <div class="px-6 py-4">
                <div class="text-lg font-semibold">
                    {{ __('Provide Feedback') }}
                </div>

                <div class="mt-4">
                    <p>How would you rate your experience on a scale of 1 to 5</p>
                    <div class="flex mt-3">
                        <div class="inline-flex items-center">
                            <input type="radio" name="star" id="" class="mr-2">
                            <x-label for="" value="{{ __('1') }}" />
                        </div>
                        <div class="inline-flex items-center ml-4">
                            <input type="radio" name="star" id="" class="mr-2">
                            <x-label for="" value="{{ __('2') }}" />
                        </div>
                        <div class="inline-flex items-center ml-4">
                            <input type="radio" name="star" id="" class="mr-2">
                            <x-label for="" value="{{ __('3') }}" />
                        </div>
                        <div class="inline-flex items-center ml-4">
                            <input type="radio" name="star" id="" class="mr-2">
                            <x-label for="" value="{{ __('4') }}" />
                        </div>
                        <div class="inline-flex items-center ml-4">
                            <input type="radio" name="star" id="" class="mr-2">
                            <x-label for="" value="{{ __('5') }}" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Have you noticed any bugs?') }}" />
                        <textarea name="" id="" cols="30" rows="2" class="block w-full border-gray-300 rounded-md mt-2"></textarea>
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Any suggestions for new features?') }}" />
                        <textarea name="" id="" cols="30" rows="2" class="block w-full border-gray-300 rounded-md mt-2"></textarea>
                    </div>
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-100 text-right">
                <x-button class="bg-indigo-500 hover:bg-indigo-400">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-modal>
</div>
