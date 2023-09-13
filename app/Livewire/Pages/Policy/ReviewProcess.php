<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Proses Tinjauan')]
class ReviewProcess extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman Informasi terkait proses penelaahan karya tulis oleh Tim Editor dan Mitra Bestari pada Bomba: Jurnal Pembangunan Daerah');
    }

    public function render(): View
    {
        return view('pages.policy.review-process');
    }
}
