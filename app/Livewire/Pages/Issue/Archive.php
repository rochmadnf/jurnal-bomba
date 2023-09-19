<?php

namespace App\Livewire\Pages\Issue;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Arsip')]
class Archive extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman informasi mengenai daftar arsip artikel');
    }

    public function render()
    {
        return view('pages.issue.archive');
    }
}
