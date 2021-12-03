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
        $responsavel = collect($mol)->keyBy('responsavel')->keys()->pop();
        $especie = collect($mol)->keyBy('especie')->keys()->pop();
        $formula = collect($mol)->keyBy('formula')->keys()->pop();
        $massa = collect($mol)->keyBy('massa')->keys()->pop();
        $IDPubChem = collect($mol)->keyBy('IDPubChem')->keys()->pop();
        $aplicabilidade = collect($mol)->keyBy('aplicabilidade')->keys()->pop();
        $referencia = collect($mol)->keyBy('referencia')->keys()->pop();

        // dump($nome_mol, $espectro);

        return view('livewire.mol-page', [
            'nome_mol' => $nome_mol,
            'espectro' => $espectro,
            'responsavel' => $responsavel,
            'especie' => $especie,
            'formula' => $formula,
            'massa' => $massa,
            'IDPubChem' => $IDPubChem,
            'aplicabilidade' => $aplicabilidade,
            'referencia' => $referencia,
        ]);
    }

}
