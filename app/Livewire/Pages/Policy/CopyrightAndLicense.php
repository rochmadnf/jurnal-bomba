<?php

namespace App\Livewire\Pages\Policy;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Hak Cipta & Lisensi')]
class CopyrightAndLicense extends Component
{
    public function render()
    {
        return view('pages.policy.copyright-and-license');
    }
}
