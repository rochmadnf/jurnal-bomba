<div>
    <x-hero />

    <div class="my-20 space-y-6 px-10">
        <h2 class="mb-10 select-none text-center text-3xl font-bold uppercase leading-snug tracking-wide text-amber-600">
            Indexed By
        </h2>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($indexedBies as $by)
                <a href="{{ $by->url }}"
                    class="group flex items-center rounded-xl px-4 py-2 transition duration-200 hover:bg-gray-100 dark:hover:bg-white">
                    <img width="{{ intval($by->width) * 16 }}" class="dark:grayscale dark:group-hover:grayscale-0"
                        src="{{ asset('storage/logo/indexes/' . $by->name . '.png?v=' . $by->version) }}"
                        alt="{{ $by->name }}">
                </a>
            @endforeach
        </div>
    </div>

    <div
        class="mx-auto grid max-w-6xl grid-cols-12 place-items-center overflow-hidden rounded-3xl bg-gray-800 text-white dark:bg-slate-50 dark:text-gray-900">

        <div class="col-span-7 space-y-4 px-10 py-14">
            <h2
                class="font-spectral text-2xl font-bold uppercase leading-tight tracking-tight text-white dark:text-slate-900">
                Majukan Pembangunan
                Daerah</h2>
            <p class="leading-7 tracking-wide text-white/90 dark:text-slate-900/90">Ayo ajukan hasil penelitianmu
                terkait
                <strong>Pembangunan
                    Daerah</strong> untuk Kemajuan Daerah dan Kesejahteraan Masyarakat.
            </p>
        </div>

        <div
            class="col-span-5 flex h-full w-full items-center justify-center px-10 py-14 heropattern-brickwall-white/10 dark:heropattern-brickwall-slate-900/10">
            <button
                class="flex items-center rounded-full bg-orange-400 px-3 py-2 text-white hover:bg-orange-500 dark:bg-amber-600 dark:hover:bg-amber-700">
                <span class="text-sm font-bold uppercase tracking-wider">Ajukan Naskah</span>
                <x-icon-arrow-line-up-right-bold class="ml-2 h-5 w-5" />
            </button>
        </div>
        {{-- <img src="https://source.unsplash.com/embsBhLrjPU" class="md:w-1/3" alt=""> --}}
    </div>
</div>
