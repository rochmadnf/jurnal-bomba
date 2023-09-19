<div class="w-full space-y-8 py-6">
    <form class="group/search-issue" wire:submit="searching">
        <div role="searchbox"
            class="flex items-center justify-between gap-2 rounded-md border p-4 group-focus-within/search-issue:border-amber-600 group-focus-within/search-issue:ring-1 group-focus-within/search-issue:ring-amber-600 dark:border-slate-300/20">
            <input
                class="block w-full border-none bg-transparent text-lg tracking-wider text-white outline-none focus:border-none focus:outline-none focus:ring-0"
                type="text" placeholder="katakunci..." wire:model="keyword">
            <button
                class="inline-flex items-center rounded-md px-4 py-3 shadow transition duration-300 dark:bg-amber-600 dark:text-white dark:hover:bg-amber-700 dark:hover:shadow-amber-700">
                @svg('icon-magnifying-glass-bold', 'h-5 w-5 mr-2')
                <span class="font-medium uppercase">Cari</span>
            </button>
        </div>
    </form>

    <header class="mt-5">
        <h1 class="text-center text-3xl font-bold uppercase tracking-wider">Artikel</h1>
        <div class="mx-auto mt-1.5 h-[0.175rem] w-[5.5rem] bg-amber-600"></div>
    </header>

    <div role="listitem" class="space-y-10">
        @for ($i = 0; $i < 4; $i++)
            <x-card-articles />
        @endfor
    </div>
</div>
