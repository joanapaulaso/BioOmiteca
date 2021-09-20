<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\NewProjects;
use App\Models\NewMolecules;
use App\Models\Spectra;
use App\Models\NewMaps;
use App\Http\Livewire\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class NewProject extends Component
{

    use WithFileUploads;

    public $user_id;
    public $responsavel;
    public $nome_projeto;
    public $especie;
    public $nome_popular;
    public $familia;
    public $publicacao;
    public $resumo;
    public $instituicao;
    public $coordenacao;
    public $financiamento;
    public $nome_molecula;
    public $formula;
    public $massa;
    public $IDPubChem;
    public $aplicabilidade;
    public $espectro;
    public $mapa;
    public $mapa_desc;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $files;
    public $mz = [];
    public $int = [];
    public $a;
    public $content;
    public $carray;

    public function render()
    {
        return view('livewire.new-project');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
     private function resetInputFields(){
        $this->nome_projeto = '';
        $this->especie = '';
        $this->nome_popular = '';
        $this->familia = '';
        $this->publicacao = '';
        $this->resumo = '';
        $this->instituicao = '';
        $this->coordenacao = '';
        $this->financiamento = '';
        $this->nome_molecula = '';
        $this->formula = '';
        $this->massa = '';
        $this->IDPubChem = '';
        $this->aplicabilidade = '';
        $this->espectro = '';
        $this->mapa = '';
        $this->mapa_desc = '';
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function save()
    {
        /*$validatedDate = $this->validate([
                'name.0' => 'required',
                'phone.0' => 'required',
                'name.*' => 'required',
                'phone.*' => 'required',
            ],
            [
                'name.0.required' => 'name field is required',
                'phone.0.required' => 'phone field is required',
                'name.*.required' => 'name field is required',
                'phone.*.required' => 'phone field is required',
            ]
        );*/

        foreach ($this->espectro as $key => $value) {

            NewProjects::create([
                'user_id' => auth()->user()->id,
                'responsavel' => auth()->user()->name,
                'nome_projeto' => $this->nome_projeto,
                'especie' => $this->especie,
                'nome_popular' => $this->nome_popular,
                'familia' => $this->familia,
                'publicacao' => $this->publicacao,
                'resumo' => $this->resumo,
                'instituicao' => $this->instituicao,
                'coordenacao' => $this->coordenacao,
                'financiamento' => $this->financiamento,
                'nome_molecula' => $this->nome_molecula[$key],
                'formula' => $this->formula[$key],
                'massa' => $this->massa[$key],
                'IDPubChem' => $this->IDPubChem[$key],
                'aplicabilidade' => $this->aplicabilidade[$key],
                'espectro' => $this->espectro[$key]->hashName(),
                'mapa' => $this->mapa,
                'mapa_desc' => $this->mapa_desc,
            ]);

            $mol_path = $this->espectro[$key]->hashName();
            $mol_localpath = $this->espectro[$key]->storeAs('spectra', $mol_path);
            /*$mol_storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix() . "spectra/";*/

            $map_path = $this->nome_molecula[$key] . '-' . $this->nome_projeto . '.' . $this->espectro[$key]->getClientOriginalExtension();
            $map_localpath = $this->espectro[$key]->storeAs('maps', $map_path);
            $map_storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix() . "maps/";

            NewMolecules::create([
                'user_id' => auth()->user()->id,
                'responsavel' => auth()->user()->name,
                'nome_projeto' => $this->nome_projeto,
                'nome_molecula' => $this->nome_molecula[$key],
                'espectro' => $this->espectro[$key]->hashName(),
            ]);

            NewMaps::create([
                'user_id' => auth()->user()->id,
                'responsavel' => auth()->user()->name,
                'nome_projeto' => $this->nome_projeto,
                'mapa' => $map_storagePath . $this->mapa->hashName(),
            ]);

            $a = 0;
            $files = fopen("spectra/" . $this->espectro[$key]->hashName(), "r");
            while(!feof($files)) {
                $content = fgets($files);
                $carray = explode(",", $content);
                list($mz1, $int1) = $carray;
                $mz[] = $mz1;
                $int[] = $int1;
                $a++;
            }

            fclose($files);

            Spectra::create([
                'user_id' => auth()->user()->id,
                'nome_projeto' => $this->nome_projeto,
                'espectro' => $this->espectro[$key]->hashName(),
                'mz' => $mz,
                'int' => $int,
            ]);

            $mz = [];
            $int = [];

        }

        $this->inputs = [];

        $this->resetInputFields();

        return redirect()->route('created-project');

    }
}
