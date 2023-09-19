<nav class="navbar">
    <div class="mx-auto flex flex-wrap items-center justify-between px-6 py-4">
        {{-- logo --}}
        <a wire:navigate href="{{ route('home') }}" class="flex items-center">
            <img class="mr-4 h-14 rounded-xl" src="{{ asset('storage/logo/constants/brand.png') }}" alt="Bomba Logo">
            <div class="flex flex-col">
                <h1 class="font-bungee text-3xl font-bold text-orange-400 dark:text-yellow-200">Bomba</h1>
                <h3 class="text-sm font-semibold uppercase">Jurnal Pembangunan Daerah</h3>
            </div>
        </a>

        {{-- nav-link --}}
        <div>
            <ul class="flex items-center gap-2">
                <x-navlink :active="request()->routeIs('home')" wire:navigate :href="route('home')">
                    Beranda
                </x-navlink>

                <x-navlink :active="request()->is('issue*')" menuName="issue" :dropdown="true">
                    Isu
                </x-navlink>

                <x-navlink :active="request()->is('editorial-board*')" menuName="editorial_board" :dropdown="true">
                    Dewan Redaksi
                </x-navlink>

                <x-navlink :active="request()->is('policy*')" menuName="policy" :dropdown="true">
                    Kebijakan
                </x-navlink>

                <x-navlink :active="request()->is('announcements')" menuName="announcements" :dropdown="true">
                    Pengumuman
                </x-navlink>

                <x-navlink :active="request()->is('about*')" menuName="about" :dropdown="true">
                    Tentang Kami
                </x-navlink>
            </ul>
        </div>

        {{-- buttons --}}
        <div class="relative flex items-center space-x-4 border-l pl-4 dark:border-l-slate-700/80">
            <x-dropdown-theme />

            <a wire:navigate href="{{ route('register') }}"
                class="font-medium uppercase text-gray-900 transition duration-200 hover:text-orange-400 dark:text-slate-50 dark:hover:text-amber-500">Daftar</a>

            <a wire:navigate href="{{ route('login') }}" type="button" class="btn btn-primary rounded-full uppercase">
                Login
                @svg('icon-sign-in-fill', 'h-5 w-5 ml-1.5')
            </a>
        </div>
    </div>
</nav>
