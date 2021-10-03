<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MolPage extends Component
{


    public function render(Request $request)
    {
        $mol = $request->path();
        $mol = str_replace("mol/", "", $mol);
        $mol = DB::table('new_molecules')->where('id_molecula', '=', $mol)->get();
        $nome_mol = collect($mol)->keyBy('nome_molecula')->keys()->pop();
        $espectro = collect($mol)->keyBy('espectro')->keys()->pop();

        // dump($nome_mol, $espectro);

        return view('livewire.mol-page', [
            'nome_mol' => $nome_mol,
            'espectro' => $espectro,
        ]);
    }

}
