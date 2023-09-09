<nav class="sticky left-0 top-0 z-10 dark:bg-gray-950">
    <div class="mx-auto flex flex-wrap items-center justify-between p-4">
        {{-- logo --}}
        <a wire:navigate href="{{ route('home') }}" class="flex items-center">
            <img class="mr-4 h-14 rounded-xl" src="{{ asset('img/logo.png') }}" alt="Bomba Logo">
            <div class="flex flex-col">
                <h1 class="font-bungee text-3xl font-bold">Bomba</h1>
                <h3 class="text-sm font-semibold">Jurnal Pembangunan Daerah</h3>
            </div>
        </a>

        {{-- nav-link --}}


        {{-- auth button --}}
        <div class="relative flex items-center space-x-4">
            @persist('dropdownTheme')
                <div x-data="{ open: false }" @click.away="open = false">
                    <button x-show="!open" @click="open = ! open" id="ddThemeMode"
                        class="inline-flex items-center rounded-full p-2 text-center text-sm font-medium text-gray-900 focus:outline-none dark:text-slate-50 dark:hover:bg-gray-900 dark:focus:bg-gray-900"
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


            <a wire:navigate href="{{ route('register') }}"
                class="text-gray-900 dark:text-slate-50 dark:hover:text-amber-500">Daftar</a>


            <a wire:navigate href="{{ route('login') }}" type="button" class="btn btn-primary rounded-full">
                Login
                @svg('icon-sign-in-fill', 'h-5 w-5 ml-1.5')
            </a>
        </div>
    </div>
</nav>
