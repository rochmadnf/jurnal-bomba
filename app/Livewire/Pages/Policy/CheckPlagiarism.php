<?php

namespace App\Livewire\Pages\Policy;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cek Plagiarisme')]
class CheckPlagiarism extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman informasi mengenai kebijakan terkait pengecekan plagiarisme pada naskah yang diajukan pada Jurnal Bomba');
    }

    public function render()
    {
        return view('pages.policy.check-plagiarism');
    }
}
