<nav class="sticky left-0 top-0 z-10 dark:bg-gray-950">
    <div class="mx-auto flex flex-wrap items-center justify-between p-4">
        {{-- logo --}}
        <a href="{{ route('home') }}" class="flex items-center">
            <img class="mr-4 h-14 rounded-xl" src="{{ asset('img/logo.png') }}" alt="Bomba Logo">
            <div class="flex flex-col">
                <h1 class="font-bungee text-3xl font-bold">Bomba</h1>
                <h3 class="text-sm font-semibold">Jurnal Pembangunan Daerah</h3>
            </div>
        </a>

        {{-- nav-link --}}


        {{-- auth button --}}
        <div class="flex items-center space-x-4">
            <div>
                <button id="ddThemeMode" data-dropdown-toggle="ddThemeList"
                    class="inline-flex items-center rounded-full p-2 text-center text-sm font-medium text-gray-900 focus:outline-none dark:text-slate-50 dark:hover:bg-gray-800 dark:focus:bg-gray-800"
                    type="button">
                    @svg('icon-moon-stars', 'dt-icon-d h-5 w-5')
                    @svg('icon-sun', 'dt-icon-l h-5 w-5 hidden')
                </button>

                <div id="ddThemeList" class="z-10 hidden rounded-md bg-slate-50 dark:bg-gray-800">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="ddThemeMode">
                        <li>
                            <button data-theme="dark"
                                class="btn-theme inline-flex w-full items-center space-x-2 px-4 py-2 hover:bg-gray-600">
                                @svg('icon-moon-stars', 'h-5 w-5')
                                <span class="text-gray-900 dark:text-slate-50">Gelap</span>
                            </button>
                        </li>
                        <li>
                            <button data-theme="light"
                                class="btn-theme inline-flex w-full items-center space-x-2 px-4 py-2 hover:bg-gray-600">
                                @svg('icon-sun', 'h-5 w-5')
                                <span class="text-gray-900 dark:text-slate-50">Terang</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>


            <a href="{{ route('register') }}"
                class="text-gray-900 dark:text-slate-50 dark:hover:text-amber-500">Daftar</a>


            <a href="{{ route('login') }}" type="button" class="btn btn-primary rounded-full">
                Login
                @svg('icon-sign-in-fill', 'h-5 w-5 ml-1.5')
            </a>
        </div>
    </div>
</nav>
