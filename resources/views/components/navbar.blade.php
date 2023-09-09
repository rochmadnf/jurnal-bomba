<nav class="navbar">
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
            <x-dropdown-theme />


            <a wire:navigate href="{{ route('register') }}"
                class="font-medium text-gray-900 transition duration-[200ms] hover:text-amber-700 dark:text-slate-50 dark:hover:text-amber-500">Daftar</a>

            <a wire:navigate href="{{ route('login') }}" type="button" class="btn btn-primary rounded-full">
                Login
                @svg('icon-sign-in-fill', 'h-5 w-5 ml-1.5')
            </a>
        </div>
    </div>
</nav>
