<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Biaya Penulis')]
class AuthorFees extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman informasi terkait kebijakan biaya penulis dalam pengajuan dan penerbitan jurnal pada Jurnal Bomba');
    }

    public function render()
    {
        return view('pages.policy.author-fees');
    }
}
