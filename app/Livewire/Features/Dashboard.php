<?php

namespace App\Livewire\Features;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Laporan;

class Dashboard extends Component
{
    #[Layout('layouts.app')]
    public $title = 'Dashboard';

    public $laporanpending, $laporanproses, $laporanselesai, $totallaporan;

    public function mount()
    {
        $this->laporanpending = Laporan::where('status', 'pending')->count();
        $this->laporanproses  = Laporan::where('status', 'proses')->count();
        $this->laporanselesai = Laporan::where('status', 'selesai')->count();
        $this->totallaporan   = Laporan::count();
    }

    public function render()
    {
        return view('livewire.features.dashboard');
    }
}
