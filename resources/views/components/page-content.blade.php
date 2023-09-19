<section>
    <x-page-header :subTitle="$subTitle" />
    <article
        class="prose prose-slate w-full !max-w-[100ch] dark:prose-invert prose-p:text-lg prose-p:leading-10 prose-p:tracking-wider prose-a:no-underline prose-li:leading-9 prose-li:tracking-wider prose-li:marker:font-source-sans prose-li:marker:font-semibold dark:prose-p:text-white dark:prose-a:text-amber-500 dark:hover:prose-a:text-amber-600 dark:prose-ol:text-white dark:prose-li:marker:text-white">
        {{ $slot }}
    </article>
</section>
