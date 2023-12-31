<?php

namespace App\Livewire\Pages\Auth;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Daftar')]
class Register extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman untuk mendaftar akun');
    }

    #[Layout('layouts.console')]
    public function render()
    {
        return view('pages.auth.register');
    }
}
