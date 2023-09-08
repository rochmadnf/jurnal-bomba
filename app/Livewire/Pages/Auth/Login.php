<?php

namespace App\Livewire\Pages\Auth;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    public function mount()
    {
        SEOTools::metatags()->setDescription('Halaman untuk login ke akun pada website Bomba: Jurnal Pembangunan Daerah.');
    }

    public function render()
    {
        return view('pages.auth.login');
    }
}
