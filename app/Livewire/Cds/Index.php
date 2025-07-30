<?php

namespace App\Livewire\Cds;
use Illuminate\Support\Facades\Auth;
use App\Models\Cd;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete(int $id): void
    {
        Cd::where('id', $id)->delete();
    }

    public function render(): View
    {
        return view('livewire.cds.index', [
            'cds' => Cd::paginate(10),
        ]);
    }
}