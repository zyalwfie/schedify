<header class="relative flex w-full flex-wrap bg-white py-3 text-sm sm:flex-nowrap sm:justify-start dark:bg-neutral-800">
    <nav class="mx-auto w-full max-w-[85rem] px-4 sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center justify-between">
            <a class="focus:outline-hidden flex-none text-xl font-semibold focus:opacity-80 dark:text-white"
                href="{{ route('main') }}" aria-label="Brand">
                <span
                    class="font-oleo text-solid inline-flex items-center gap-x-2 text-2xl font-semibold dark:text-white">
                    Schedify
                </span>
            </a>
            <div class="sm:hidden">
                <button type="button"
                    class="hs-collapse-toggle shadow-2xs focus:outline-hidden relative flex size-9 items-center justify-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                    id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
        </div>
        <div id="hs-navbar-example"
            class="hs-collapse hidden grow basis-full overflow-hidden transition-all duration-300 sm:block"
            aria-labelledby="hs-navbar-example-collapse">
            <div class="mt-5 flex flex-col gap-5 sm:mt-0 sm:flex-row sm:items-center sm:justify-end sm:ps-5">
                <button type="button"
                    class="hs-dark-mode-active:hidden hs-dark-mode focus:outline-hidden block rounded-full font-medium text-gray-800 hover:bg-gray-200 focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    data-hs-theme-click-value="dark">
                    <span class="group inline-flex size-9 shrink-0 items-center justify-center">
                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                        </svg>
                    </span>
                </button>
                <button type="button"
                    class="hs-dark-mode-active:block hs-dark-mode focus:outline-hidden hidden rounded-full font-medium text-gray-800 hover:bg-gray-200 focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-800"
                    data-hs-theme-click-value="light">
                    <span class="group inline-flex size-9 shrink-0 items-center justify-center">
                        <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2"></path>
                            <path d="M12 20v2"></path>
                            <path d="m4.93 4.93 1.41 1.41"></path>
                            <path d="m17.66 17.66 1.41 1.41"></path>
                            <path d="M2 12h2"></path>
                            <path d="M20 12h2"></path>
                            <path d="m6.34 17.66-1.41 1.41"></path>
                            <path d="m19.07 4.93-1.41 1.41"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </nav>
</header>
