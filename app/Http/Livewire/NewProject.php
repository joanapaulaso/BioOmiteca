<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\NewProjects;
use App\Models\NewMolecules;
use App\Models\Spectra;
use App\Models\NewMaps;

class NewProject extends Component
{

    use WithFileUploads;

    public $user_id;
    public $status = 0;
    public $responsavel;
    public $nome_projeto;
    public $id_projeto;
    public $especie;
    public $nome_popular;
    public $familia;
    public $publicacao;
    public $resumo;
    public $instituicao;
    public $coordenacao;
    public $financiamento;
    public $repositorio;
    public $experimento;
    public $nome_molecula;
    public $formula;
    public $massa;
    public $IDPubChem;
    public $aplicabilidade;
    public $referencia;
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
    public $project;
    public $step;

    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
    ];

    public function mount()
    {
        $this->step = 0;
        $id_projeto = $this->id_projeto;
    }

    public function decreaseStep()
    {
        $this->step--;
    }

    public function submit()
    {

        $action = $this->stepActions[$this->step];

        $this->$action();
    }

    public function submit1()
    {
        /*$this->validate([
            'name' => 'required|min:4',
        ]);*/

        $this->project = NewProjects::create([

            'user_id' => auth()->user()->id,
            'id_projeto' => $this->id_projeto,
            'responsavel' => auth()->user()->name,
            'especie' => $this->especie,
            'nome_projeto' => auth()->user()->id . ' ' . auth()->user()->name . ' ' .  $this->especie,
            'nome_popular' => $this->nome_popular,
            'familia' => $this->familia,
            'publicacao' => $this->publicacao,
            'resumo' => $this->resumo,
            'instituicao' => $this->instituicao,
            'coordenacao' => $this->coordenacao,
            'financiamento' => $this->financiamento,
            'repositorio' => $this->repositorio,
            'experimento' => $this->experimento->storePublicly('experimento', 'public'),
            'status' => $this->status,

        ]);

        $this->step++;
    }

    public function submit2()
    {
        /*$this->validate([
            'email' => 'email|required',
        ]);*/
        foreach ($this->espectro as $key => $value) {

            $this->project = NewMolecules::create([

                'user_id' => auth()->user()->id,
                'responsavel' => auth()->user()->name,
                'nome_projeto' => auth()->user()->id . ' ' . auth()->user()->name . ' ' .  $this->especie,
                'especie' => $this->especie,
                'nome_molecula' => $this->nome_molecula[$key],
                'formula' => $this->formula[$key],
                'massa' => $this->massa[$key],
                'IDPubChem' => $this->IDPubChem[$key],
                'aplicabilidade' => $this->aplicabilidade[$key],
                'referencia' => $this->referencia[$key],
                'status' => $this->status,
                'espectro' => $this->espectro[$key]->hashName(),

                ]);

            $mol_name = $this->espectro[$key]->hashName();
            $mol_localpath = $this->espectro[$key]->storePublicly('espectro', 'public');
            $mol_publicpath = asset($mol_localpath);

            $a = 0;
            $files = fopen($mol_localpath, "r");
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
                'nome_projeto' => auth()->user()->id . ' ' . auth()->user()->name . ' ' .  $this->especie,
                'nome_molecula' => $this->nome_molecula[$key],
                'espectro' => $this->espectro[$key]->hashName(),
                'mz' => $mz,
                'int' => $int,
            ]);

            $mz = [];
            $int = [];

        }

        $this->step++;
    }

    public function submit3()
    {
        /*$this->validate([
            'color' => 'required',
        ]);*/

        $this->project = NewMaps::create([

            'user_id' => auth()->user()->id,
            'responsavel' => auth()->user()->name,
            'nome_projeto' => auth()->user()->id . ' ' . auth()->user()->name . ' ' .  $this->especie,
            'mapa' => $this->mapa->hashName(),
            'especie' => $this->especie,
            'mapa_desc' => $this->mapa_desc,

            ]);

            $map_name = $this->mapa->hashName();
            $map_localpath = $this->mapa->storePublicly('maps', 'public');
            $map_publicpath = asset($map_localpath);

        session()->flash('message', 'Projeto enviado!');

        $this->step++;

    }

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
    private function resetInputFields()
    {
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

}
