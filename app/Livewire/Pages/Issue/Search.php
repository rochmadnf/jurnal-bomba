<?php

namespace App\Livewire\Pages\Issue;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cari Artikel')]
class Search extends Component
{
    public string $keyword;

    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman untuk mencari artikel yang di inginkan');
    }

    public function render()
    {
        return view('pages.issue.search');
    }
}
