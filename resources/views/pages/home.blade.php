<div>
    <x-hero />

    <div class="my-20 space-y-6 px-10">
        <h2 class="mb-10 select-none text-center text-4xl font-bold uppercase tracking-wider text-amber-600">Indexed By
        </h2>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($indexedBies as $by)
                <a href="{{ $by->url }}"
                    class="group flex items-center rounded-xl px-4 py-2 transition duration-200 hover:bg-white">
                    <img width="{{ $by->width * 16 }}" class="grayscale group-hover:grayscale-0"
                        src="{{ asset('img/indexes/' . $by->name . '.png?v=' . $by->version) }}"
                        alt="{{ $by->name }}">
                </a>
            @endforeach
        </div>
    </div>

    <div class="flex justify-center rounded-md bg-slate-100/90">
        <div>
            Yeye
        </div>
        <img src="https://source.unsplash.com/embsBhLrjPU" class="md:w-1/3" alt="">
    </div>
</div>
