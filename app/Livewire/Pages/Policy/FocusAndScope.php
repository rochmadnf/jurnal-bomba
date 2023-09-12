<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Fokus dan Ruang Lingkup')]
class FocusAndScope extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman informasi terkait fokus dan ruang lingkup yang dibahas pada Jurnal Bomba');
    }
    public function render()
    {
        return view('pages.policy.focus-and-scope');
    }
}
