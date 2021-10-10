<x-guest-layout>
    <div class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="min-h-screen flex">
            <div id="sideBar" class="hidden lg:block w-96 pt-24 px-6 bg-white shadow-lg">
                <div class="max-w-md">
                    <x-application-logo class="w-14" />
                </div>
                <h2 class="mt-4 text-lg font-semibold text-gray-700">
                    Billing Management
                </h2>
                <div class="flex items-center mt-12 text-gray-600">
                    <div>
                        Signed in as
                    </div>
                    <!---->
                    <div class="ml-1">
                        Adedaramola.
                    </div>
                </div>
                <div class="mt-3 text-sm text-gray-600">
                    Managing billing for Adedaramola.
                </div>
                <div class="mt-12 text-gray-600">
                    Our billing management portal allows you to conveniently manage your subscription plan, payment
                    method, and download your recent invoices.
                </div>
                <!---->
                <div id="sideBarReturnLink" class="mt-12">
                    <a href="https://useforma.app/dashboard"
                        class="flex items-center">
                        <svg class="w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                          </svg>

                        <div class="ml-2 text-gray-600 underline">
                            Return to Forma
                        </div>
                    </a></div>
            </div>
            <div class="flex-1">
                <a href="https://useforma.app/dashboard" id="topNavReturnLink"
                    class="lg:hidden flex items-center w-full px-4 py-4 bg-white shadow-lg"><svg viewBox="0 0 20 20"
                        fill="currentColor" class="arrow-left w-4 h-4 text-gray-400">
                        <path fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-2 text-gray-600 underline">
                        Return to Forma
                    </div>
                </a>
                <div class="mb-6 pt-6 lg:pt-24 lg:max-w-4xl lg:mx-auto">
                    <!---->
                    <!---->
                    <div>
                        <h1 class="text-2xl font-semibold text-gray-700 px-4 sm:px-8">
                            Subscribe
                        </h1>
                        <div class="mt-6 sm:px-8">
                            <div class="px-6 py-4 bg-gray-200 border border-gray-300 sm:rounded-lg shadow-sm">
                                <div class="max-w-2xl text-sm text-gray-600">
                                    It looks like you do not have an active subscription. You may choose one of the
                                    subscription plans below to get started. Subscription plans may be changed or
                                    cancelled at your convenience.
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="space-y-6 mt-6 sm:px-8">
                            <div class="bg-white sm:rounded-lg shadow-sm overflow-hidden">
                                <div>
                                    <div class="flex justify-between">
                                        <h2 class="px-6 pt-4 text-xl font-semibold text-gray-700">
                                            Plus
                                        </h2>
                                        <!---->
                                    </div>
                                    <div class="px-6 pb-4">
                                        <div class="mt-2 text-md font-semibold text-gray-700"><span>£9.99</span>
                                            <!----> / monthly</div>
                                        <div class="mt-3 max-w-xl text-sm text-gray-600">
                                            Our recommended plan for small teams and those who want to build custom
                                            integrations.
                                        </div>
                                        <div class="mt-3 space-y-2">
                                            <div class="flex items-center"><svg viewBox="0 0 20 20" fill="currentColor"
                                                    class="text-green-400 w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div class="ml-2 text-sm text-gray-600">
                                                    Unlimited forms
                                                </div>
                                            </div>
                                            <div class="flex items-center"><svg viewBox="0 0 20 20" fill="currentColor"
                                                    class="text-green-400 w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div class="ml-2 text-sm text-gray-600">
                                                    Unlimited email notifications
                                                </div>
                                            </div>
                                            <div class="flex items-center"><svg viewBox="0 0 20 20" fill="currentColor"
                                                    class="text-green-400 w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div class="ml-2 text-sm text-gray-600">
                                                    5 GB of storage for files and images
                                                </div>
                                            </div>
                                            <div class="flex items-center"><svg viewBox="0 0 20 20" fill="currentColor"
                                                    class="text-green-400 w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div class="ml-2 text-sm text-gray-600">
                                                    Share forms with your team
                                                </div>
                                            </div>
                                            <div class="flex items-center"><svg viewBox="0 0 20 20" fill="currentColor"
                                                    class="text-green-400 w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div class="ml-2 text-sm text-gray-600">
                                                    Setup webhook notifications
                                                </div>
                                            </div>
                                            <div class="flex items-center"><svg viewBox="0 0 20 20" fill="currentColor"
                                                    class="text-green-400 w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div class="ml-2 text-sm text-gray-600">
                                                    Success page customisation
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 py-4 bg-gray-100 bg-opacity-50 border-t border-gray-100 text-right">
                                    <button
                                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none transition ease-in-out duration-150 bg-blue-600">
                                        Subscribe
                                    </button>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
