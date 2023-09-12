<?php
$shortcutMenus = [
    // ['name' => '', 'url'=> '', 'icon' => ''],
    ['name' => 'Fokus & Ruang Lingkup', 'url' => route('focus-and-scope'), 'icon' => 'crosshair'],
    ['name' => 'Biaya Penulis', 'url' => route('author-fees'), 'icon' => 'currency-circle-dollar'],
    ['name' => 'Cek Plagiarisme', 'url' => route('check-plagiarism'), 'icon' => 'list-checks'],
];
?>

<aside class="space-y-10 rounded-md border border-slate-300/20 px-6 py-10 md:col-span-3">
    <div class="border-b border-b-slate-300/20 pb-6">
        <a href="#"
            class="flex items-center justify-center rounded-md bg-amber-600 px-5 py-2.5 text-white shadow-md shadow-amber-600/80 transition duration-150 hover:bg-amber-700 hover:shadow-amber-700/80">
            @svg('icon-upload-simple', 'h-5 w-5 mr-2')
            <span>Buat Pengajuan</span>
        </a>
    </div>

    <div
        class="flex flex-col items-center justify-center gap-y-4 overflow-hidden rounded-t-md border border-slate-300/20">
        <header class="w-full px-6 py-3 dark:bg-amber-600 dark:text-white">
            <h3 class="select-none text-center text-lg font-medium uppercase">Format Penulisan</h3>
        </header>

        <div class="p-4">
            <a href="#" class="group/download inline-flex items-center">
                @svg('icon-microsoft-word-logo-fill', 'h-12 w-12 mr-2 group-hover/download:text-blue-500')
                <span class="text-lg font-medium uppercase group-hover/download:text-blue-500">Unduh Berkas</span>
            </a>
        </div>
    </div>

    {{-- shortcut menu --}}
    <div class="flex flex-col overflow-hidden rounded-t-md border border-slate-300/20">
        <header class="w-full px-6 py-3 dark:bg-amber-600 dark:text-white">
            <h3 class="select-none text-center text-lg font-medium uppercase">Menu Tambahan</h3>
        </header>

        <div class="py-2">
            <ul class="space-y-1 divide-y divide-slate-300/20">
                @foreach ($shortcutMenus as $menu)
                    <li>
                        <a wire:navigate href="{{ $menu['url'] }}"
                            class="{{ url()->current() === $menu['url'] ? 'navside-link active' : 'navside-link' }}">
                            @svg('icon-' . $menu['icon'], 'h-6 w-6 mr-2')
                            <span class="font-medium md:text-base">{{ $menu['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>
