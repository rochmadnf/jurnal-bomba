@props(['active' => false, 'dropdown' => false, 'menuName' => null])

<?php
$classes = $active ?? false ? 'nav-link active' : 'nav-link';

$menuItems = [
    'issue' => [['label' => 'Terkini', 'url' => '#'], ['label' => 'Arsip', 'url' => '#']],
    'editorial_board' => [['label' => 'Tim Editor', 'url' => '#'], ['label' => 'Mitra Bestari', 'url' => '#']],
    'policy' => [['label' => 'Fokus dan Ruang Lingkup', 'url' => route('focus-and-scope')], ['label' => 'Pedoman Penulis', 'url' => '#'], ['label' => 'Proses Tinjauan', 'url' => '#'], ['label' => 'Etika Publikasi', 'url' => '#']],
    'announcements' => [['label' => 'Informasi', 'url' => '#'], ['label' => 'Panggilan untuk Penulis', 'url' => '#']],
    'about' => [['label' => 'Tentang Jurnal Ini', 'url' => '#'], ['label' => 'Penyerahan', 'url' => '#'], ['label' => 'Pernyataan Privasi', 'url' => '#'], ['label' => 'Kontak', 'url' => '#']],
];

?>

<li>
    @if (!$dropdown)
        <a {{ $attributes->merge(['class' => $classes]) }}>
            {{ $slot }}
        </a>
    @else
        <div class="relative" x-data="{ isOpen: false }">
            <button {{ $attributes->merge(['class' => $classes]) }} @click="isOpen = !isOpen">
                {{ $slot }}
            </button>
            <div x-cloak x-show="isOpen" @click.away="isOpen = !isOpen"
                class="absolute left-0 top-12 min-w-[10rem] rounded-md dark:bg-amber-600 dark:text-slate-50">
                <div class="flex flex-col py-2 uppercase">
                    @foreach ($menuItems["$menuName"] as $menuItem)
                        <a wire:navigate href="{{ $menuItem['url'] }}" @click="isOpen=!isOpen"
                            class="menu-item {{ url()->current() === $menuItem['url'] ? 'active' : '' }}">{{ $menuItem['label'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</li>
