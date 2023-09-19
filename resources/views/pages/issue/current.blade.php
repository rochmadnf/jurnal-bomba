<div role="contentinfo" class="space-y-12">
    <x-card-issue />

    <div class="w-full space-y-8">
        <header>
            <h1 class="text-3xl font-bold uppercase tracking-wider">Artikel</h1>
            <div class="h-[0.175rem] w-[5.5rem] bg-amber-600"></div>
        </header>

        <div role="listitem" class="space-y-10">
            @for ($i = 0; $i < 4; $i++)
                <x-card-articles />
            @endfor
        </div>
    </div>
</div>
