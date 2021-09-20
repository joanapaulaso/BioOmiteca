<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Spectra;
use App\Models\NewProjects;
use App\Models\NewMolecules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MolPage extends Component
{


    public function render(Request $request)
    {
        $mol = $request->path();
        $mol = str_replace("mol/", "", $mol);
        $nome_mol = DB::table('new_molecules')->where('id_molecula', '=', $mol)->get();
        $nome_mol = collect($nome_mol)->keyBy('nome_molecula')->keys()->pop();
        $espectro = DB::table('new_molecules')->where('id_molecula', '=', $mol)->get();
        $espectro = collect($espectro)->keyBy('espectro')->keys()->pop();

        // dump($nome_mol, $espectro);

        return view('livewire.mol-page', [
            'nome_mol' => $nome_mol,
            'espectro' => $espectro,
        ]);
    }

}
