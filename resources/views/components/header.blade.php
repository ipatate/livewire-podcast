<header class="bg-white border-b z-10 relative" x-data="{open: false}">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
         aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5 text-red-500" wire:navigate>
                <span class="sr-only">Podcast company</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                     viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12 3a4 4 0 0 0-4 4h2a.5.5 0 0 1 0 1H8v1h2a.5.5 0 0 1 0 1H8v1h2a.5.5 0 0 1 0 1H8a4 4 0 0 0 8 0h-2a.5.5 0 0 1 0-1h2v-1h-2a.5.5 0 0 1 0-1h2V8h-2a.5.5 0 0 1 0-1h2a4 4 0 0 0-4-4"/>
                    <path fill="currentColor" fill-rule="evenodd"
                          d="M11.5 20v-2.5h1V20zm-3.5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5"
                          clip-rule="evenodd"/>
                    <path fill="currentColor" fill-rule="evenodd"
                          d="M6.227 13.709a.5.5 0 0 1 .647.284a5.5 5.5 0 0 0 10.16.222a.5.5 0 0 1 .916.403a6.5 6.5 0 0 1-12.008-.262a.5.5 0 0 1 .285-.647"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                    @click="open = !open"
                    class="cursor-pointer -m-2.5 inline-flex items-center
                    justify-center
                    rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6
            text-gray-900" wire:navigate>Home</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog"
         aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div :class="{'hidden': !open }" class="fixed inset-0 z-10"></div>
        <div
            :class="{'hidden': !open }"
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5 text-red-500" wire:navigate>
                    <span class="sr-only">Your Company</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32"
                         height="32"
                         viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12 3a4 4 0 0 0-4 4h2a.5.5 0 0 1 0 1H8v1h2a.5.5 0 0 1 0 1H8v1h2a.5.5 0 0 1 0 1H8a4 4 0 0 0 8 0h-2a.5.5 0 0 1 0-1h2v-1h-2a.5.5 0 0 1 0-1h2V8h-2a.5.5 0 0 1 0-1h2a4 4 0 0 0-4-4"/>
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M11.5 20v-2.5h1V20zm-3.5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5"
                              clip-rule="evenodd"/>
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M6.227 13.709a.5.5 0 0 1 .647.284a5.5 5.5 0 0 0 10.16.222a.5.5 0 0 1 .916.403a6.5 6.5 0 0 1-12.008-.262a.5.5 0 0 1 .285-.647"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <button type="button"
                        @click="open = !open"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base
                           font-semibold leading-7 text-gray-900
                           hover:bg-gray-50" wire:navigate>Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
