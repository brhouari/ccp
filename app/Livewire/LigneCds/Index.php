<?php

namespace App\Livewire\LigneCds;

use Illuminate\Support\Facades\Auth;
use App\Models\LigneCd;
use App\Models\Cd;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
     public $cd;
    public function delete(int $id): void
    {
        LigneCd::where('id', $id)->delete();
    }

    

    public function mount(Cd $cd)
    {
        $this->cd = $cd;
    }
    public function render()
    {
        return view('livewire.ligne-cds.index', [
            'lignecds' => LigneCd::where('cd_id', $this->cd->id)->paginate(10),
        ]);
    }
}
