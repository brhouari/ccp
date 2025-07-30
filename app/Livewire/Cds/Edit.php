<?php

namespace App\Livewire\Cds;

use App\Models\Cd;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    #[Validate('required|string')]
    public  $title = '';

    #[Validate('required|string')]
    public  $description = '';

    public Cd $cd;

    public function mount(Cd $cd): void
    {
        $this->cd = $cd;
        $this->title = $cd->title;
        $this->description = $cd->description;
    }

    public function save(): void
    {
        $data = $this->validate();
        //dd($data);

        $this->cd->update($data);
        
        $this->redirectRoute('cds.index');
    }

    public function render(): View
    {
        return view('livewire.cds.edit');
    }
}