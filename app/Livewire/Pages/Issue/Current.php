<?php

namespace App\Livewire\Pages\Issue;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Isu Terkini')]
class Current extends Component
{

    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman isu terbaru');
    }
    public function render()
    {
        return view('pages.issue.current');
    }
}
