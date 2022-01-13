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

        $maps = NewMaps::search($this->search)
            ->where('status', '=', 2)
            ->paginate($this->perPage);

        return view('livewire.map-search',
            compact('maps')
        );
    }
}
