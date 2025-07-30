<?php

namespace App\Livewire\Personnes;

use App\Models\Personne;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required|string|min:3')]
    public string $nom = '';

    #[Validate('required|string|min:3')]
    public string $prenom = '';



    #[Validate('required|int|min:3')]
    public int $ccp = 0;

    #[Validate('required|int|min:3')]
    public int $cle = 0;

    public function save(): void
    {
        $data = $this->validate();

        Personne::create($data);

        $this->redirectRoute('personnes.index');
    }

    public function render(): View
    {
        return view('livewire.personnes.create');
    }
}