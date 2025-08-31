<?php

namespace App\Livewire\LigneCds;


use App\Models\Cd;
use App\Models\Personne;
use App\Models\LigneCd;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\On;

class Create extends Component
{
   
    public Cd $cd;
    public $nom;
    public $prenom;
    public $ccp;
    public $cle;
    public $montant;
    public $personnes = []; // liste de noms

    
    public $selected_id; // nom sélectionné

     public function mount(Cd $cd)
    {
        
        $this->cd = $cd;
         $this->personnes = Personne::select('id', 'nom', 'prenom')
            ->orderBy('nom')
            ->orderBy('prenom')
            ->get()
            ->toArray();
    
    }
    
    #[On('selected_nom')]
     public function updatedSelectedId($value)
    {

       //dd('détection OK : ' . $value);
        if ($value) {
            $personne = Personne::find($value);

            if ($personne) {
                 $this->nom = $personne->nom;
                $this->prenom = $personne->prenom;
                $this->ccp = $personne->ccp;
                $this->cle = $personne->cle;
                $this->montant = $personne->montant;
            } else {
                $this->reset([ 'prenom', 'ccp','cle','montant']);
            }
        }
    }


    public function save()
    {
        $this->validate([
            'nom' => 'required|string|min:3',
            'prenom' => 'required|string|min:3',
            'ccp' => 'required|int|min:3',
            'cle' => 'required|int|min:2',
            'montant' => 'required|numeric|min:3',


        ]);

        LigneCd::create([
            'cd_id' => $this->cd->id,
            'nom' => $this->nom,
             'prenom' => $this->prenom,
              'ccp' => $this->ccp,
               'cle' => $this->cle,
               'montant' => $this->montant,
        ]);

        session()->flash('success', 'Ligne ajoutée avec succès.');

        return redirect()->route('ligne-cds.index', $this->cd->id);
    }

    public function render(): View
    {
        return view('livewire.ligne-cds.create');
    }
}