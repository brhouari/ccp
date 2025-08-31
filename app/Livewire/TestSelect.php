<?php

namespace App\Livewire;

use Livewire\Component;

class TestSelect extends Component
{
    public $selected_nom;

    public function updatedSelectedNom($value)
    {
        dd('Détection OK : ' . $value);
    }

    public function render()
    {
        return view('livewire.test-select');
    }
}
