<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Avaliacao extends Component
{

    public function render(Request $request)
    {
        $id_projeto = $request->path();
        $id_projeto = str_replace("avaliacao/", "", $id_projeto);
        $id_projeto = DB::table('new_projects')->where('id_projeto', '=', $id_projeto)->get();
        $projeto_id = collect($id_projeto)->keyBy('id_projeto')->keys()->pop();
        $nome_projeto = collect($id_projeto)->keyBy('nome_projeto')->keys()->pop();
        $status = collect($id_projeto)->keyBy('status')->keys()->pop();

        // dump($nome_projeto, $status);

        return view('livewire.avaliacao', [
            'projeto_id' => $projeto_id,
            'nome_projeto' => $nome_projeto,
            'status' => $status,
        ]);
    }

    public function statusRevisao($projeto_id)
    {
        // dd($nome_projeto);

        $projeto = DB::table('new_projects')->where('id_projeto', '=', $projeto_id)->update([
            'status' => 1
        ]);

        session()->flash('msg_usuario','Status atualizado para "necessita de revisão"');
        return redirect()->to("/avaliacao/$projeto_id");
    }

    public function statusAceito($projeto_id)
    {
        $projeto = DB::table('new_projects')->where('id_projeto', '=', $projeto_id)->update([
            'status' => 2
        ]);

        session()->flash('msg_usuario','Status atualizado para "Aceito"');
        return redirect()->to("/avaliacao/$projeto_id");
    }

}
