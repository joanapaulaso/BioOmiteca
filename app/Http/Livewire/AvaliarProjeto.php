<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AvaliarProjeto extends Component
{
    public function render(Request $request)
    {
        $id_projeto = $request->path();
        $id_projeto = str_replace("avaliar-projeto/", "", $id_projeto);
        $id_projeto = DB::table('new_projects')->where('id_projeto', '=', $id_projeto)->get();
        $user_id = collect($id_projeto)->keyBy('user_id')->keys()->pop();
        $projeto_id = collect($id_projeto)->keyBy('id_projeto')->keys()->pop();
        $responsavel = collect($id_projeto)->keyBy('responsavel')->keys()->pop();
        $especie = collect($id_projeto)->keyBy('especie')->keys()->pop();
        $nome_projeto = collect($id_projeto)->keyBy('nome_projeto')->keys()->pop();
        $nome_popular = collect($id_projeto)->keyBy('nome_popular')->keys()->pop();
        $familia = collect($id_projeto)->keyBy('familia')->keys()->pop();
        $publicacao = collect($id_projeto)->keyBy('publicacao')->keys()->pop();
        $resumo = collect($id_projeto)->keyBy('resumo')->keys()->pop();
        $instituicao = collect($id_projeto)->keyBy('instituicao')->keys()->pop();
        $coordenacao = collect($id_projeto)->keyBy('coordenacao')->keys()->pop();
        $financiamento = collect($id_projeto)->keyBy('financiamento')->keys()->pop();
        $repositorio = collect($id_projeto)->keyBy('repositorio')->keys()->pop();
        $experimento = collect($id_projeto)->keyBy('experimento')->keys()->pop();
        $status = collect($id_projeto)->keyBy('status')->keys()->pop();

        $mols = DB::table('new_molecules')->where('nome_projeto', '=', $nome_projeto)->get();

        // $nome_molecula = collect($mols)->keyBy('nome_molecula')->keys()->pop();
        // $formula = collect($mols)->keyBy('formula')->keys()->pop();
        // $massa = collect($mols)->keyBy('massa')->keys()->pop();
        // $IDPubChem = collect($mols)->keyBy('IDPubChem')->keys()->pop();
        // $aplicabilidade = collect($mols)->keyBy('aplicabilidade')->keys()->pop();
        // $espectro = collect($mols)->keyBy('espectro')->keys()->pop();

        // foreach ($id_molecula as $key => $value)
        // {
        //     $nome_molecula[$key] = collect($id_molecula)->keyBy('nome_molecula')->keys()->pop();
        //     $formula[$key] = collect($id_molecula)->keyBy('formula')->keys()->pop();
        //     $massa[$key] = collect($id_molecula)->keyBy('massa')->keys()->pop();
        //     $IDPubChem[$key] = collect($id_molecula)->keyBy('IDPubChem')->keys()->pop();
        //     $aplicabilidade[$key] = collect($id_molecula)->keyBy('aplicabilidade')->keys()->pop();
        //     $espectro[$key] = collect($id_molecula)->keyBy('espectro')->keys()->pop();
        // }


        $spectra = DB::table('spectras')->where('nome_projeto', '=', $nome_projeto)->get();
        $collection = collect($spectra);
        $spectraCount = collect($spectra)->count();

        // foreach ($spectra as $key => $value)
        // {
        //     $mz[$key] = collect($spectra)->keyBy('formula')->keys()->pop();
        //     $int[$key] = collect($spectra)->keyBy('massa')->keys()->pop();

        // }

        return view('livewire.avaliar-projeto', [
            'user_id' => $user_id,
            'id_projeto' => $projeto_id,
            'responsavel' => $responsavel,
            'especie' => $especie,
            'nome_projeto' => $nome_projeto,
            'nome_popular' => $nome_popular,
            'familia' => $familia,
            'publicacao' => $publicacao,
            'resumo' => $resumo,
            'instituicao' => $instituicao,
            'coordenacao' => $coordenacao,
            'financiamento' => $financiamento,
            'repositorio' => $repositorio,
            'experimento' => $experimento,
            'status' => $status,
            'mols' => $mols,
            // 'nome_molecula' => $nome_molecula[$key],
            // 'formula' => $formula[$key],
            // 'massa' => $massa[$key],
            // 'IDPubChem' => $IDPubChem[$key],
            // 'aplicabilidade' => $aplicabilidade[$key],
            // 'espectro' => $espectro[$key],
            // 'mz' => $mz[$key],
            // 'int' => $int[$key],
            'spectraCount' => $spectraCount,
        ]);
    }

    public function statusRevisao($id_projeto)
    {
        // dd($nome_projeto);

        $projeto = DB::table('new_projects')->where('id_projeto', '=', $id_projeto)->update([
            'status' => 1
        ]);

        session()->flash('msg_usuario','Status atualizado para "necessita de revisão"');
        return redirect()->to("/avaliar-projeto/$id_projeto");
    }

    public function statusAceito($id_projeto)
    {
        $projeto = DB::table('new_projects')->where('id_projeto', '=', $id_projeto)->update([
            'status' => 2
        ]);

        session()->flash('msg_usuario','Status atualizado para "Aceito"');
        return redirect()->to("/avaliar-projeto/$id_projeto");
    }
}
