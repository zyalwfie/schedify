<div class="mx-auto my-8 grid w-full max-w-[85rem] grid-cols-1 gap-8 px-4 md:grid-cols-2 lg:grid-cols-3">
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
                @forelse ($day->courses as $course)
                    <div
                        class="border-main-600 border-b pb-4 pt-4 first-of-type:pt-0 last-of-type:border-b-0 last-of-type:pb-0">
                        <div class="mb-2 flex items-center gap-4">
                            <div class="flex items-center gap-1">
                                <span
                                    class="shadow-2xs inline-flex items-center gap-x-1.5 rounded-md border border-gray-200 bg-white px-3 py-1.5 text-xs font-medium text-gray-800 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                                    {{ $course->start_time }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24" class="text-gray-500">
                                    <path d="M6 13h6v4l6-5-6-5v4H6z"></path>
                                </svg>
                                <span
                                    class="shadow-2xs inline-flex items-center gap-x-1.5 rounded-md border border-gray-200 bg-white px-3 py-1.5 text-xs font-medium text-gray-800 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                                    {{ $course->end_time }}
                                </span>
                            </div>
                            <span>|</span>
                            <span
                                class="inline-flex items-center gap-x-1.5 rounded-full bg-gray-100 px-3 py-1.5 text-xs font-medium text-gray-800 dark:bg-gray-800/30 dark:text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24" class="size-3">
                                    <path
                                        d="m20.2,4.02l-10-2c-.3-.06-.6.02-.83.21-.23.19-.37.47-.37.77v1h-5c-.55,0-1,.45-1,1v14c0,.55.45,1,1,1h5v1c0,.3.13.58.37.77.18.15.4.23.63.23.07,0,.13,0,.2-.02l10-2c.47-.09.8-.5.8-.98V5c0-.48-.34-.89-.8-.98Zm-15.2,13.98V6h4v12h-4Zm14,.18l-8,1.6V4.22l8,1.6v12.36Z">
                                    </path>
                                    <path d="M13 11A1 1 0 1 0 13 13 1 1 0 1 0 13 11z"></path>
                                </svg>
                                {{ $course->room->room_name }}
                            </span>
                        </div>
                        <h3 class="font-martel mb-2 text-lg font-bold text-gray-800 dark:text-white">
                            {{ $course->course_name }} | {{ $course->semester->semester_number }}
                        </h3>
                        <div class="flex flex-wrap items-center gap-2">
                            @foreach ($course->lectures as $lecture)
                                <div>
                                    <span
                                        class="bg-main-300 text-indicator dark:bg-main-500/10 inline-flex items-center gap-x-1 rounded-full px-1.5 py-1 text-xs font-medium">
                                        <svg class="size-3 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5m0-8c1.65 0 3 1.35 3 3s-1.35 3-3 3-3-1.35-3-3 1.35-3 3-3M4 22h16c.55 0 1-.45 1-1v-1c0-3.86-3.14-7-7-7h-4c-3.86 0-7 3.14-7 7v1c0 .55.45 1 1 1m6-7h4c2.76 0 5 2.24 5 5H5c0-2.76 2.24-5 5-5">
                                            </path>
                                        </svg>
                                        {{ $lecture->name }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="flex">
                        <div class="shrink-0">
                            <!-- Icon -->
                            <span
                                class="inline-flex size-8 items-center justify-center rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                                <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m19,4h-2v-2h-2v2h-6v-2h-2v2h-2c-1.1,0-2,.9-2,2v14c0,1.1.9,2,2,2h14c1.1,0,2-.9,2-2V6c0-1.1-.9-2-2-2ZM5,20v-12h14v-2,14s-14,0-14,0Z">
                                    </path>
                                    <path
                                        d="M13.28 12.59 12 10 10.72 12.59 8 12.82 10.12 14.94 9.18 18 12 16.12 14.82 18 13.88 14.94 16 12.82 13.28 12.59z">
                                    </path>
                                </svg>
                            </span>
                            <!-- End Icon -->
                        </div>
                        <div class="ms-3">
                            <h3 id="hs-bordered-red-style-label" class="font-semibold text-gray-800 dark:text-white">
                                It's Free Day!
                            </h3>
                            <p class="text-sm text-gray-700 dark:text-neutral-400">
                                Kick back and enjoy your free time.
                            </p>
                        </div>
                    </div>
                @endforelse
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
