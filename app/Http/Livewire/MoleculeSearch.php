<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\NewMolecules;
use App\Models\Spectra;
use App\Models\NewProjects;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MoleculeSearch extends Component
{
    use WithPagination;

    public $perPage = '5';
    public $searchMol = '';
    public $molName;
    public $mols;


    public function updatingSearch()
    {

        $this->resetPage();

    }

    public function render()
    {

        $this->mols = DB::table('new_molecules')->where('nome_molecula', '=', $this->molName)->get();

        return view('livewire.molecule-search', [
            'molecules' => NewMolecules::where('nome_molecula', 'like', '%'.$this->searchMol.'%')
                ->orWhere('massa', 'like', '%'.$this->searchMol.'%')
                ->orWhere('especie', 'like', '%'.$this->searchMol.'%')
                ->paginate($this->perPage),
            'mols' => $this->mols,
        ]);

    }

}
