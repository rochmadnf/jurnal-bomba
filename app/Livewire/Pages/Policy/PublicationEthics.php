<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Etika Publikasi')]
class PublicationEthics extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman Informasi terkait Etika Publikasi pada Bomba: Jurnal Pembangunan Daerah');
    }
    public function render()
    {
        return view('pages.policy.publication-ethics');
    }
}
