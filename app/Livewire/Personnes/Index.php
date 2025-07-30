<?php

namespace App\Livewire\Personnes;
use Illuminate\Support\Facades\Auth;
use App\Models\Personne;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete(int $id): void
    {
        Personne::where('id', $id)->delete();
    }

    public function render(): View
    {
        return view('livewire.personnes.index', [
            'personnes' => Personne::paginate(10),
        ]);
    }
}