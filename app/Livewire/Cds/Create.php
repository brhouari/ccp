<?php

namespace App\Livewire\Cds;

use App\Models\Cd;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required|string|min:3')]
    public string $title = '';

    #[Validate('required|string|min:3')]
    public string $description = '';

    public function save(): void
    {
        $data = $this->validate();

        Cd::create($data);

        $this->redirectRoute('cds.index');
    }

    public function render(): View
    {
        return view('livewire.cds.create');
    }
}