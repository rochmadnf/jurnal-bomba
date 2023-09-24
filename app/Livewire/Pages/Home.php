<?php

namespace App\Livewire\Pages;

use App\Models\Master\IndexedBy;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Beranda')]
class Home extends Component
{
    public string $keyword = '';

    public function searchIssue()
    {
        $this->redirect(route('search-issue', ['keyword' => $this->keyword]), true);
    }

    public function mount(): void
    {
        SEOTools::setDescription('Bomba: Jurnal Pembangunan Daerah &mdash; merupakan jurnal ilmiah yang diterbitkan oleh Badan Riset dan Inovasi Daerah Provinsi Sulawesi Tengah. Jurnal ini berisi hasil penelitian, kajian, dan naskah akademis berfokus pada lingkup pembangunan daerah yang terbit dua kali setiap tahun pada Juli dan Desember.');
        SEOTools::metatags()->addKeyword(['jurnal', 'bomba', 'jurnal bomba', 'jurnal daerah sulawesi tengah', 'sulawesi tengah']);
    }

    public function render(): View
    {
        return view('pages.home', [
            'indexedBies' => IndexedBy::orderBy('order')->get(),
        ]);
    }
}
