@persist('dropdownTheme')
    <div class="relative h-9 w-9" x-data="{ open: false }" @click.away="open = false">
        <button x-show="!open" @click="open = !open" id="ddThemeMode"
            class="inline-flex items-center rounded-full p-2 text-center text-sm font-medium text-gray-900 transition duration-150 hover:bg-orange-400 hover:text-slate-50 focus:bg-orange-400 focus:text-slate-50 focus:outline-none dark:text-slate-50 dark:hover:bg-amber-600 dark:focus:bg-amber-600"
            type="button">
            @svg('icon-moon-stars', 'dt-icon-d h-5 w-5 hidden')
            @svg('icon-sun', 'dt-icon-l h-5 w-5 hidden')
            @svg('icon-desktop', 'dt-icon-s h-5 w-5')
        </button>
        <div class="absolute -right-0.5 top-0" x-cloak x-show="open" id="ddThemeList">
            <div
                class="flex flex-row-reverse items-center justify-center space-x-1 rounded-full border border-gray-500 p-1 dark:border-slate-400">
                <button data-btn-theme="light" class="btn-theme">
                    @svg('icon-sun', 'h-5 w-5')
                </button>

                <button data-btn-theme="dark" class="btn-theme">
                    @svg('icon-moon-stars', 'h-5 w-5')
                </button>

                <button data-btn-theme="system" class="btn-theme">
                    @svg('icon-desktop', 'h-5 w-5')
                </button>
            </div>
        </div>
    </div>
@endpersist
