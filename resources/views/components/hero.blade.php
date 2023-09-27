<div class="hero-banner">

    <div class="space-y-20">
        <section role="heading" class="space-y-1">
            <h1 for="journal_search" class="font-spectral text-7xl font-bold uppercase leading-[1] dark:text-white">
                Temukan
                Artikel</h1>
            <h3 class="ml-4 font-spectral text-lg font-semibold uppercase dark:text-white">Akses artikel tanpa
                batas dan
                tanpa biaya
            </h3>
        </section>

        <form class="space-y-8 pl-2" wire:submit="searchIssue">
            {{-- keyword --}}
            <div class="group/search mb-5">
                <div
                    class="flex items-center space-x-1 rounded-md border border-slate-700/20 py-4 pl-2 pr-4 focus:border-orange-400 group-focus-within/search:border-orange-400 group-focus-within/search:bg-white group-focus-within/search:ring-1 group-focus-within/search:ring-orange-400 dark:border-slate-300/30 dark:focus:border-amber-600 dark:group-focus-within/search:border-amber-600 dark:group-focus-within/search:bg-slate-900 dark:group-focus-within/search:ring-amber-600">
                    <input type="text" name="keyword"
                        class="block w-full border-0 bg-transparent text-xl text-slate-900 outline-0 placeholder:uppercase placeholder:text-slate-600 focus:border-none focus:outline-0 focus:ring-0 dark:text-white"
                        placeholder="Katakunci..." wire:model="keyword">
                    <button class="btn btn-lg btn-primary" type="submit">
                        @svg('icon-magnifying-glass', 'h-6 w-6 mr-2')
                        <span class="uppercase">Cari</span>
                    </button>
                </div>
            </div>
        </form>

        {{-- statistic --}}
        <div class="grid w-full grid-cols-3 divide-x-2 divide-slate-400/30 pl-2">
            <div class="flex flex-col items-center justify-center space-y-1 pr-6">
                <h3 class="font-source-sans text-4xl font-bold">1</h3>
                <p class="text-xl font-medium uppercase">Bahasa</p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-1 px-6">
                <h3 class="font-source-sans text-4xl font-bold">5</h3>
                <p class="text-xl font-medium uppercase">Jilid</p>
            </div>
            <div class="flex flex-col items-center justify-center space-y-1 pl-6">
                <h3 class="font-source-sans text-4xl font-bold">30</h3>
                <p class="text-xl font-medium uppercase">Artikel</p>
            </div>
        </div>
    </div>
</div>
