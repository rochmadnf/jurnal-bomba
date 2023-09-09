@persist('dropdownTheme')
    <div x-data="{ open: false }" @click.away="open = false">
        <button x-show="!open" @click="open = !open" id="ddThemeMode"
            class="inline-flex items-center rounded-full p-2 text-center text-sm font-medium text-gray-900 hover:bg-slate-300 focus:bg-slate-300 focus:outline-none dark:text-slate-50 dark:hover:bg-gray-800 dark:focus:bg-gray-800"
            type="button">
            @svg('icon-moon-stars', 'dt-icon-d h-5 w-5')
            @svg('icon-sun', 'dt-icon-l h-5 w-5 hidden')
        </button>
        <div x-show="open" id="ddThemeList">
            <div class="flex items-center justify-center space-x-1 rounded-full border border-gray-600 p-1">
                <button data-btn-theme="light" class="btn-theme">
                    @svg('icon-sun', 'h-5 w-5')
                </button>

                <button data-btn-theme="dark" class="btn-theme">
                    @svg('icon-moon-stars', 'h-5 w-5')
                </button>
            </div>
        </div>
    </div>
@endpersist
