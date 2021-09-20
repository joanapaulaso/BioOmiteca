<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Spectra;
use App\Models\NewProjects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class MyProjects extends Component
{

    public function render()
    {
        $projetos = DB::table('new_projects')->where('user_id', '=', auth()->user()->id)->orderBy('id_projeto', 'DESC')->get();
        $mols = DB::table('new_molecules')->where('user_id', '=', auth()->user()->id)->orderBy('id_molecula', 'DESC')->get();
        $mapas = DB::table('new_maps')->where('user_id', '=', auth()->user()->id)->orderBy('id_mapa', 'DESC')->get();
        $spectra = DB::table('spectras')->where('user_id', '=', auth()->user()->id)->get();
        $collection = collect($spectra);
        $spectraCount = collect($spectra)->count();

        return view('livewire.my-projects', [
            'projetos' => $projetos,
            'mols' => $mols,
            'mapas' => $mapas,
            'spectra' => $spectra,
            'collection' => $collection,
            'spectraCount' => $spectraCount,
        ]);
    }
}
