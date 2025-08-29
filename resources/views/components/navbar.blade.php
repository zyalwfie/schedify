<header class="flex w-full flex-wrap bg-white py-3 text-sm sm:flex-nowrap sm:justify-start dark:bg-neutral-800">
    <nav class="mx-auto flex w-full max-w-[85rem] basis-full flex-wrap items-center justify-between px-4">
        <a class="font-oleo text-solid focus:outline-hidden flex-none text-2xl font-semibold focus:opacity-80 sm:order-1 dark:text-white"
            href="{{ route('main') }}">Schedify</a>
        <div class="flex items-center gap-x-2 order-3">
            <button type="button"
                class="hs-dark-mode-active:hidden hs-dark-mode focus:outline-hidden block rounded-full font-medium text-gray-800 hover:bg-gray-200 focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                data-hs-theme-click-value="dark">
                <span class="group inline-flex size-9 shrink-0 items-center justify-center">
                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                    </svg>
                </span>
            </button>
            <button type="button"
                class="hs-dark-mode-active:block hs-dark-mode focus:outline-hidden hidden rounded-full font-medium text-gray-800 hover:bg-gray-200 focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-800"
                data-hs-theme-click-value="light">
                <span class="group inline-flex size-9 shrink-0 items-center justify-center">
                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
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
        <div id="hs-navbar-alignment"
            class="hs-collapse overflow-hidden transition-all duration-300 order-2 block grow-0 basis-auto"
            aria-labelledby="hs-navbar-alignment-collapse">
            <div class="font-martel font-bold underline underline-offset-4">
                {{ now()->format('l, d M Y') }}
            </div>
        </div>
    </nav>
</header>
