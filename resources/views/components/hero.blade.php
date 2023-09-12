<div
    class="to-gray-white relative z-30 -mx-6 flex h-fit items-center justify-center bg-gradient-to-b from-slate-900 via-slate-800 to-slate-600 md:p-[6.475rem]">

    {{-- background pattern --}}
    <div
        class="absolute -z-10 h-full w-full opacity-[0.55] dark:heropattern-topography-slate-300/10 2xl:[clip-path:polygon(0_0,100%_0,100%_50%,70%_26%,30%_26%,0_50%)]">
    </div>

    <div class="space-y-20">
        <h1 for="journal_search" class="font-spectral text-[5.5rem] font-bold leading-[1] dark:text-white">Temukan jurnal
            & artikel.</h1>

        <form class="space-y-8 pl-2">
            {{-- filter --}}
            <div class="mb-5 flex space-x-10">
                <div class="group flex items-center">
                    <input id="journals" type="radio" value="journals" name="filter_search"
                        class="peer h-5 w-5 border-gray-300 bg-gray-100 text-orange-400 focus:ring-2 focus:ring-orange-400 dark:border-gray-600 dark:bg-gray-700 dark:text-amber-600 dark:ring-offset-gray-800 dark:focus:ring-amber-600">
                    <label for="journals"
                        class="ml-2 select-none font-source-sans text-xl tracking-wider dark:text-white dark:group-focus-within:text-amber-500 dark:peer-checked:text-amber-500">Jurnal</label>
                </div>
                <div class="group flex items-center">
                    <input id="articles" checked type="radio" value="articles" name="filter_search"
                        class="peer h-5 w-5 border-gray-300 bg-gray-100 text-orange-400 focus:ring-2 focus:ring-orange-400 dark:border-gray-600 dark:bg-gray-700 dark:text-amber-600 dark:ring-offset-gray-800 dark:focus:ring-amber-600">
                    <label for="articles"
                        class="ml-2 select-none font-source-sans text-xl tracking-wider dark:text-white dark:group-focus-within:text-amber-500 dark:peer-checked:text-amber-500">Artikel</label>
                </div>
            </div>

            {{-- keyword --}}
            <div class="group/search mb-5">
                <div
                    class="flex items-center space-x-1 rounded-md border border-slate-400/60 py-4 pl-2 pr-4 focus:border-amber-600 group-focus-within/search:border-amber-600 group-focus-within/search:ring-1 group-focus-within/search:ring-amber-600">
                    <input type="text" name="keyword"
                        class="block w-full border-0 bg-transparent text-xl text-white outline-0 placeholder:uppercase placeholder:text-slate-600 focus:border-none focus:outline-0 focus:ring-0"
                        placeholder="Katakunci...">
                    <button class="btn btn-lg btn-primary">
                        @svg('icon-magnifying-glass', 'h-6 w-6 mr-2')
                        <span class="uppercase">Cari</span>
                    </button>
                </div>
            </div>
        </form>

        {{-- statistic --}}
        <div class="grid w-full grid-cols-3 divide-x-2 divide-slate-400/30 pl-2">
            <div class="flex flex-col space-y-1 pr-6">
                <h3 class="font-source-sans text-4xl font-bold">1</h3>
                <p class="text-xl font-medium uppercase">Bahasa</p>
            </div>
            <div class="flex flex-col space-y-1 px-6">
                <h3 class="font-source-sans text-4xl font-bold">5</h3>
                <p class="text-xl font-medium uppercase">Jurnal</p>
            </div>
            <div class="flex flex-col space-y-1 pl-6">
                <h3 class="font-source-sans text-4xl font-bold">16</h3>
                <p class="text-xl font-medium uppercase">Artikel</p>
            </div>
        </div>
    </div>
</div>
