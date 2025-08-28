<div class="mx-auto my-8 grid w-full max-w-[85rem] grid-cols-1 gap-8 px-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @forelse ($this->days as $day)
        <div
            class="shadow-2xs flex flex-col rounded-xl border border-gray-200 bg-white dark:border-neutral-700 dark:bg-neutral-900 dark:shadow-neutral-700/70">
            <div
                class="rounded-t-xl border-b border-gray-200 bg-gray-100 px-4 py-3 md:px-5 md:py-4 dark:border-neutral-700 dark:bg-neutral-900">
                <p class="font-oleo mt-1 capitalize text-gray-500 dark:text-neutral-500">
                    {{ $day->day_name }}
                </p>
            </div>
            <div class="p-4 md:p-5">
                <h3 class="font-martel text-lg font-bold text-gray-800 dark:text-white mb-2">
                    Card title
                </h3>
                <div class="inline-flex flex-wrap gap-2">
                    <div>
                        <span
                            class="inline-flex items-center gap-x-1 rounded-full bg-teal-100 px-2 py-1 text-xs font-medium text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-3 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                </path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            Connected
                        </span>
                    </div>
                    <div>
                        <span
                            class="inline-flex items-center gap-x-1 rounded-full bg-red-100 px-1.5 py-1 text-xs font-medium text-red-800 dark:bg-red-500/10 dark:text-red-500">
                            <svg class="size-3 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z">
                                </path>
                                <path d="M12 9v4"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            Attention
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div
            class="shadow-2xs flex min-h-60 flex-col rounded-xl border border-gray-200 bg-white md:col-span-2 lg:col-span-3 xl:col-span-4 dark:border-neutral-700 dark:bg-neutral-900 dark:shadow-neutral-700/70">
            <div class="flex flex-auto flex-col items-center justify-center p-4 md:p-5">
                <svg class="size-10 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" x2="2" y1="12" y2="12"></line>
                    <path
                        d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                    </path>
                    <line x1="6" x2="6.01" y1="16" y2="16"></line>
                    <line x1="10" x2="10.01" y1="16" y2="16"></line>
                </svg>
                <p class="font-martel mt-2 text-sm text-gray-800 dark:text-neutral-300">
                    There's no schedule to show.
                </p>
            </div>
        </div>
    @endforelse
</div>
