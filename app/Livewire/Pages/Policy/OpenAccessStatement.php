<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pernyataan Akses Terbuka')]
class OpenAccessStatement extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription("Halaman Informasi terkait pernyataan akses artikel secara terbuka di Bomba: Jurnal Pembangunan Daerah");
    }
    public function render()
    {
        return view('pages.policy.open-access-statement');
    }
}
