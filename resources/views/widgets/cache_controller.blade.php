<div class="dark:bg-gray-850 rounded-xl ring ring-gray-200 dark:ring-gray-700/80 shadow-ui-md @container/widget" data-ui-card="" data-inset="true">
    <header class="flex items-center min-h-[49px] justify-between border-b border-gray-200 px-4.5 py-2 dark:border-gray-700">
        <a class="flex items-center gap-2.5" href="{{ cp_route('utilities.cache') }}">
            @cp_svg('icons/cache', 'size-4 shrink-0 hidden! size-5 text-gray-500 @xs/widget:block!')
            <span>{{ __('Cache Manager') }}</span>
        </a>
    </header>
    <div class="flex flex-col gap-3 p-4 flex-1">
        <div class="grid grid-cols-2 gap-3">
            <div>
                <h3 class="text-xs font-bold text-gray-700 dark:text-gray-300 mb-1.5">{{ __('Content Stache') }}</h3>
                <form method="POST" action="{{ cp_route('utilities.cache.clear-stache') }}">
                    @csrf
                    <button type="submit" class="relative inline-flex items-center justify-center w-full whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline bg-linear-to-b from-white to-gray-50 hover:to-gray-100 hover:bg-gray-50 text-gray-900 border border-gray-300 shadow-ui-sm with-contrast:border-gray-500 dark:from-gray-800 dark:to-gray-900 dark:hover:to-gray-800 dark:hover:bg-gray-900 dark:border-gray-700/80 dark:text-gray-300 dark:shadow-ui-md px-3 h-10 text-sm rounded-lg">
                        {{ __('Clear') }}
                    </button>
                </form>
            </div>
            <div>
                <h3 class="text-xs font-bold text-gray-700 dark:text-gray-300 mb-1.5">{{ __('Static Page Cache') }}</h3>
                @if (config('statamic.static_caching.strategy'))
                    <form method="POST" action="{{ cp_route('utilities.cache.clear-static') }}">
                        @csrf
                        <button type="submit" class="relative inline-flex items-center justify-center w-full whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline bg-linear-to-b from-white to-gray-50 hover:to-gray-100 hover:bg-gray-50 text-gray-900 border border-gray-300 shadow-ui-sm with-contrast:border-gray-500 dark:from-gray-800 dark:to-gray-900 dark:hover:to-gray-800 dark:hover:bg-gray-900 dark:border-gray-700/80 dark:text-gray-300 dark:shadow-ui-md px-3 h-10 text-sm rounded-lg">
                            {{ __('Clear') }}
                        </button>
                    </form>
                @else
                    <span class="inline-flex items-center justify-center w-full whitespace-nowrap font-medium text-gray-500 dark:text-gray-400 border-none px-3 h-10 text-sm rounded-lg pointer-events-none">
                        {{ __('Disabled') }}
                    </span>
                @endif
            </div>
            <div>
                <h3 class="text-xs font-bold text-gray-700 dark:text-gray-300 mb-1.5">{{ __('Application Cache') }}</h3>
                <form method="POST" action="{{ cp_route('utilities.cache.clear-application-cache') }}">
                    @csrf
                    <button type="submit" class="relative inline-flex items-center justify-center w-full whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline bg-linear-to-b from-white to-gray-50 hover:to-gray-100 hover:bg-gray-50 text-gray-900 border border-gray-300 shadow-ui-sm with-contrast:border-gray-500 dark:from-gray-800 dark:to-gray-900 dark:hover:to-gray-800 dark:hover:bg-gray-900 dark:border-gray-700/80 dark:text-gray-300 dark:shadow-ui-md px-3 h-10 text-sm rounded-lg">
                        {{ __('Clear') }}
                    </button>
                </form>
            </div>
            <div>
                <h3 class="text-xs font-bold text-gray-700 dark:text-gray-300 mb-1.5">{{ __('Image Cache') }}</h3>
                <form method="POST" action="{{ cp_route('utilities.cache.clear-image-cache') }}">
                    @csrf
                    <button type="submit" class="relative inline-flex items-center justify-center w-full whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline bg-linear-to-b from-white to-gray-50 hover:to-gray-100 hover:bg-gray-50 text-gray-900 border border-gray-300 shadow-ui-sm with-contrast:border-gray-500 dark:from-gray-800 dark:to-gray-900 dark:hover:to-gray-800 dark:hover:bg-gray-900 dark:border-gray-700/80 dark:text-gray-300 dark:shadow-ui-md px-3 h-10 text-sm rounded-lg">
                        {{ __('Clear') }}
                    </button>
                </form>
            </div>
        </div>
        <form method="POST" action="{{ cp_route('utilities.cache.clear-all') }}">
            @csrf
            <button type="submit" class="inline-flex items-center justify-center w-full whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline bg-linear-to-b from-primary/90 to-primary hover:bg-primary-hover text-white border border-primary-border shadow-ui-md inset-shadow-2xs inset-shadow-white/25 px-4 h-10 text-sm rounded-lg">
                {{ __('Clear All') }}
            </button>
        </form>
    </div>
</div>
