<?php

namespace App\Livewire\Pages\EditorialBoard;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mitra Bestari')]
class PeerReviewer extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Daftar Mitra Bestari pada Bomba: Jurnal Pembangunan Daerah.');
    }

    public function render(): View
    {
        return view('pages.editorial-board.peer-reviewer');
    }
}
