<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\NewMaps;
use App\Models\Spectra;
use App\Models\NewProjects;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MapSearch extends Component
{

    use WithPagination;

    public $perPage = '5';
    public $searchMol = '';
    public $molName;
    public $mols;
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

        $this->mols = DB::table('new_maps')
            ->where('especie', '=', $this->molName)
            ->get();

        return view('livewire.map-search', [
            'maps' => NewMaps::where('especie', 'like', '%'.$this->searchMol.'%')
                ->paginate($this->perPage),
            'mols' => $this->mols,
        ]);
    }
}