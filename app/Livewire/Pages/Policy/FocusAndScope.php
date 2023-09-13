<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Fokus & Ruang Lingkup')]
class FocusAndScope extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman informasi terkait Fokus dan Ruang Lingkup yang dibahas pada Bomba: Jurnal Pembangunan Daerah.');
    }
    public function render()
    {
        return view('pages.policy.focus-and-scope');
    }
}
