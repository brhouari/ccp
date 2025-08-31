<?php

namespace App\Livewire\LigneCds;

use App\Models\Cd;

use App\Models\LigneCd;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    public LigneCd $lignecd;
    public $nom;
    public $prenom;
    public $ccp;
    public $cle;
    public $montant;
   

    public function mount(LigneCd $lignecd): void
    {
        $this->lignecd = $lignecd;
        $this->nom = $lignecd->nom;
        $this->prenom = $lignecd->prenom;
        $this->ccp = $lignecd->ccp;
        $this->cle = $lignecd->cle;
        $this->nom = $lignecd->nom;
        $this->montant = $lignecd->montant;
    }

    public function save(): void
    {
        $data = $this->validate();
        //dd($data);

        $this->lignecd->update($data);
        
        $this->redirectRoute('ligne-cds.index');
    }

    public function render(): View
    {
        return view('livewire.ligne-cds.edit');
    }
}