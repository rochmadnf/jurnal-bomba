@props(['active' => false, 'dropdown' => false, 'menuName' => null])

<?php
$classes = $active ?? false ? 'nav-link active' : 'nav-link';

$menuItems = [
    'issue' => [
        //
        ['label' => 'Terkini', 'url' => route('current-issue')],
        ['label' => 'Arsip', 'url' => route('archive-issue')],
    ],
    'editorial_board' => [
        //
        ['label' => 'Tim Editor', 'url' => '#'],
        ['label' => 'Mitra Bestari', 'url' => route('peer-reviewer')],
    ],
    'policy' => [
        //
        ['label' => 'Fokus dan Ruang Lingkup', 'url' => route('focus-and-scope')],
        ['label' => 'Pedoman Penulis', 'url' => '#'],
        ['label' => 'Proses Tinjauan', 'url' => route('review-process')],
        ['label' => 'Etika Publikasi', 'url' => route('publication-ethics')],
    ],
    'announcements' => [
        //
        ['label' => 'Informasi', 'url' => '#'],
        ['label' => 'Panggilan untuk Penulis', 'url' => '#'],
    ],
    'about' => [
        //
        ['label' => 'Tentang Jurnal Ini', 'url' => '#'],
        ['label' => 'Penyerahan', 'url' => '#'],
        ['label' => 'Pernyataan Privasi', 'url' => '#'],
        ['label' => 'Kontak', 'url' => '#'],
    ],
];

?>

<li>
    @if (!$dropdown)
        <a {{ $attributes->merge(['class' => $classes]) }}>
            {{ $slot }}
        </a>
    @else
        <div class="group relative">
            <button {{ $attributes->merge(['class' => $classes]) }}>
                {{ $slot }}
            </button>

            <div
                class="absolute left-0 top-9 min-w-[10rem] scale-0 transition-transform duration-[400ms] ease-in-out group-hover:scale-100">
                <div class="h-2 w-full"></div>
                <div
                    class="flex flex-col rounded-md bg-orange-400 py-2 uppercase text-slate-900 dark:bg-amber-600 dark:text-white">
                    @foreach ($menuItems["$menuName"] as $menuItem)
                        <a wire:navigate href="{{ $menuItem['url'] }}"
                            class="menu-item {{ url()->current() === $menuItem['url'] ? 'active' : '' }}">{{ $menuItem['label'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</li>
