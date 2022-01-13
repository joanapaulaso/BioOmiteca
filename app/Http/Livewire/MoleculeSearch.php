<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\NewMolecules;
use Illuminate\Support\Facades\DB;

class MoleculeSearch extends Component
{
    use WithPagination;

    public $perPage = '10';
    public $search = '';
    public $status;
    public $status_0 = 0;
    public $status_1 = 1;
    public $status_2 = 2;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $molecules = NewMolecules::search($this->search)
            ->where('status', '=', 2)
            ->paginate($this->perPage);

        return view('livewire.molecule-search',
            compact('molecules')
        );
    }
}
