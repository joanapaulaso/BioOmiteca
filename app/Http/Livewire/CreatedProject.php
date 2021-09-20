<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Spectra;
use App\Models\NewProjects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CreatedProject extends Component
{

    public function render()
    {
        $metadados = DB::table('new_projects')->where('user_id', '=', auth()->user()->id)->orderBy('id_projeto', 'DESC')->first();
        $mols = DB::table('new_molecules')->where('nome_projeto', '=', $metadados->nome_projeto)->get();
        $spectra = DB::table('spectras')->where('nome_projeto', '=', $metadados->nome_projeto)->get();
        $collection = collect($spectra);
        $spectraCount = collect($spectra)->count();

        return view('livewire.created-project', [
            'metadados' => $metadados,
            'mols' => $mols,
            'collection' => $collection,
            'spectraCount' => $spectraCount,
        ]);

    }

}
