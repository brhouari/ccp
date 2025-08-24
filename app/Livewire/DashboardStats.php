<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cd;
use App\Models\Personne;
use Illuminate\View\View;


class DashboardStats extends Component
{
    public $cdCount;
    public $personneCount;

    public function mount(){
        $this->cdCount = Cd::count();
        $this->personneCount= Personne::count();
    }
    public function render()
    {
        return view('livewire.dashboard-stats');
    }
}
