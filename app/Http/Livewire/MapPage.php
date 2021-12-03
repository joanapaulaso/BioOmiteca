<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MapPage extends Component
{

    public function render(Request $request)
    {
        $map = $request->path();
        $map = str_replace("map/", "", $map);
        $map = DB::table('new_maps')->where('id_mapa', '=', $map)->get();
        $responsavel = collect($map)->keyBy('responsavel')->keys()->pop();
        $especie = collect($map)->keyBy('especie')->keys()->pop();
        $mapa = collect($map)->keyBy('mapa')->keys()->pop();
        $mapa_desc = collect($map)->keyBy('mapa_desc')->keys()->pop();

        // dump($nome_mol, $espectro);

        return view('livewire.map-page', [
            'responsavel' => $responsavel,
            'especie' => $especie,
            'mapa' => $mapa,
            'mapa_desc' => $mapa_desc,
        ]);
    }

}
