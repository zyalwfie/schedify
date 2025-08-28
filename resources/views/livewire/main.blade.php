<div class="mx-auto grid w-full max-w-[85rem] grid-cols-1 gap-8 px-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 my-8">
    @for ($i = 1; $i <= 7; $i++)
        <div
            class="shadow-2xs flex flex-col rounded-xl border border-gray-200 bg-white dark:border-neutral-700 dark:bg-neutral-900 dark:shadow-neutral-700/70">
            <div
                class="rounded-t-xl border-b border-gray-200 bg-gray-100 px-4 py-3 md:px-5 md:py-4 dark:border-neutral-700 dark:bg-neutral-900">
                <p class="font-oleo mt-1 text-sm text-gray-500 dark:text-neutral-500">
                    Monday
                </p>
            </div>
            <div class="p-4 md:p-5">
                <h3 class="font-martel text-lg font-bold text-gray-800 dark:text-white">
                    Card title
                </h3>
                <p class="mt-2 text-gray-500 dark:text-neutral-400">
                    With supporting text below as a natural lead-in to additional content.
                </p>
                <a class="focus:outline-hidden mt-3 inline-flex items-center gap-x-1 rounded-lg border border-transparent text-sm font-semibold text-indicator decoration-2 hover:text-indicator hover:underline focus:text-indicator focus:underline disabled:pointer-events-none disabled:opacity-50 dark:text-indicator dark:hover:text-indicator dark:focus:text-indicator"
                    href="#">
                    Card link
                    <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </div>
        </div>
    @endfor
</div>
