<section>
    <h1 class="text-4xl font-bold dark:text-white">{{ $subTitle }}</h1>
    <div class="mb-8 mt-4 border-b-[1px] border-b-slate-300/20"></div>
    <article
        class="prose prose-slate dark:prose-invert prose-p:text-lg prose-p:leading-10 prose-p:tracking-wider prose-a:no-underline dark:prose-p:text-white dark:prose-a:text-amber-500">
        {{ $slot }}
    </article>
</section>
