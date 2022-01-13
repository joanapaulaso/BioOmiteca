<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\ExperimentImport;
use App\Models\NewProjects;
use App\Models\NewMolecules;
use App\Models\Spectra;
use App\Models\NewMaps;
use Illuminate\Support\Facades\DB;

class NewProject extends Component
{

    use WithFileUploads;

    // Form Steps variables
    public $inputs = [];
    public $user_id;
    public $updateMode = false;
    public $i = 1;
    public $files;
    public $a;
    public $content;
    public $carray;
    public $project;
    public $step;

    // NewProjects Table variables
    public $id_project;
    public $main_researcher;
    public $responsavel;
    public $species;
    public $species_popular;
    public $world_flora_link;
    public $family;
    public $SISGEN;
    public $institution;
    public $coordination;
    public $financial_support;
    public $publication_mols;
    public $publication_maps;
    public $abstract;
    public $repository_mols;
    public $repository_maps;
    public $exp_metadata;
    public $status = 0;

    // NewMolecules Table variables
    public $id_molecule;
    public $name_molecule;
    public $mass;
    public $adduct;
    public $formula;
    public $IDPubChem;
    public $applicability;
    public $biblio_ref;
    public $spectra_file;

    // Spectra Table variables
    public $id_spectra;
    public $mz = [];
    public $int = [];

    // NewMaps Table variables
    public $id_maps;
    public $map1_file;
    public $map1_desc;
    public $map2_file;
    public $map2_desc;
    public $map3_file;
    public $map3_desc;
    public $map4_file;
    public $map4_desc;
    public $map5_file;
    public $map5_desc;

    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
        'submit4',
    ];

    public function __construct()
    {
        $this->main_researcher = Auth::id();
        $this->responsavel = Auth::user()->name;
        // dd($this->responsavel);
    }

    public function mount()
    {
        $this->step = 0;
        $id_project = $this->id_project;
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

            // FOREIGN
            'main_researcher' => $this->main_researcher,
            'responsavel' => $this->responsavel,

            // NOT FOREIGN
            'id_project' => $this->id_project,
            'species' => $this->species,
            'species_popular' => $this->species_popular,
            'world_flora_link' => $this->world_flora_link,
            'family' => $this->family,
            'SISGEN' => $this->SISGEN,
            'institution' => $this->institution,
            'coordination' => $this->coordination,
            'financial_support' => $this->financial_support,
            'publication_mols' => $this->publication_mols,
            'publication_maps' => $this->publication_maps,
            'abstract' => $this->abstract,
            'repository_mols' => $this->repository_mols,
            'repository_maps' => $this->repository_maps,
            'status' => $this->status,

        ]);

        $this->step++;
    }

    public function submit2()
    {
        /*$this->validate([
            'name' => 'required|min:4',
        ]);*/
        // dd($id_proj, $exp_metadata_name);

        (new ExperimentImport)->import($this->exp_metadata, 'local', \Maatwebsite\Excel\Excel::XLSX);

        $metabo_experiments = DB::table('metabo_experiments')->latest('id_metabo_experiments')->first();
        $biogeo_experiments = DB::table('biogeo_experiments')->latest('id_biogeo_experiments')->first();
        $biogeo_pa = DB::table('biogeo_protected_areas')->latest('id_biogeo_protected_areas')->first();
        $project = NewProjects::where('main_researcher', '=', $this->main_researcher)->get();
        $project = collect($project)->keyBy('id_project')->keys()->pop();

        DB::table('metabo_experiments')->where('id_metabo_experiments', $metabo_experiments->id_metabo_experiments)->update(['project_id' => $project]);
        DB::table('biogeo_experiments')->where('id_biogeo_experiments', $biogeo_experiments->id_biogeo_experiments)->update(['project_id' => $project]);
        DB::table('biogeo_protected_areas')->where('id_biogeo_protected_areas', $biogeo_pa->id_biogeo_protected_areas)->update(['project_id' => $project]);

        $this->step++;
    }

    public function submit3()
    {
        /*$this->validate([
            'email' => 'email|required',
        ]);*/
        foreach ($this->spectra_file as $key => $value) {

            $proj_mol = NewProjects::where('main_researcher', '=', $this->main_researcher)->get();
            $id_proj_mol = collect($proj_mol)->keyBy('id_project')->keys()->pop();

            $this->project = NewMolecules::create([

                // NOT FOREIGN
                'name_molecule' => $this->name_molecule[$key],
                'mass' => $this->mass[$key],
                'adduct' => $this->adduct[$key],
                'formula' => $this->formula[$key],
                'IDPubChem' => $this->IDPubChem[$key],
                'applicability' => $this->applicability[$key],
                'biblio_ref' => $this->biblio_ref[$key],
                'spectra_file' => $this->spectra_file[$key]->hashName(),

                // FOREIGN
                'id_project' => $id_proj_mol,
                'species' => $this->species,
                'species_popular' => $this->species_popular,
                'family' => $this->family,
                'SISGEN' => $this->SISGEN,
                'institution' => $this->institution,
                'coordination' => $this->coordination,
                'financial_support' => $this->financial_support,
                'publication_mols' => $this->publication_mols,
                'repository_mols' => $this->repository_mols,
                'status' => $this->status,
                'main_researcher' => $this->main_researcher,
                'responsavel' => $this->responsavel,

            ]);

            $mol_name = $this->spectra_file[$key]->hashName();
            $mol_localpath = $this->spectra_file[$key]->storePublicly('spectra', 'public');
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

            $mol_spectra = NewMolecules::where('main_researcher', '=', $this->main_researcher)->get();
            $id_mol_spectra = collect($mol_spectra)->keyBy('id_molecule')->keys()->pop();
            $name_mol_spectra = collect($mol_spectra)->keyBy('name_molecule')->keys()->pop();
            $spectra_file_mol_spectra = collect($mol_spectra)->keyBy('spectra_file')->keys()->pop();

            Spectra::create([

                // NOT FOREIGN
                'id_spectra' => $this->id_spectra,
                'mz' => $mz,
                'int' => $int,

                // FOREIGN
                'id_project' => $id_proj_mol,
                'id_molecule' => $id_mol_spectra,
                'name_molecule' => $name_mol_spectra,
                'spectra_file' => $spectra_file_mol_spectra,
                'main_researcher' => $this->main_researcher,
                'responsavel' => $this->responsavel,

            ]);

            $mz = [];
            $int = [];

        }

        $this->step++;
    }

    public function submit4()
    {
        /*$this->validate([
            'color' => 'required',
        ]);*/

        $proj_maps = NewProjects::where('main_researcher', '=', $this->main_researcher)->get();
        $id_proj_maps = collect($proj_maps)->keyBy('id_project')->keys()->pop();

        $this->project = NewMaps::create([

            // NOT FOREIGN
            'id_maps' => $this->id_maps,
            'map1_file' => $this->map1_file->hashName(),
            'map1_desc' => $this->map1_desc,
            'map2_file' => $this->map2_file->hashName(),
            'map2_desc' => $this->map2_desc,
            'map3_file' => $this->map3_file->hashName(),
            'map3_desc' => $this->map3_desc,
            'map4_file' => $this->map4_file->hashName(),
            'map4_desc' => $this->map4_desc,
            'map5_file' => $this->map5_file->hashName(),
            'map5_desc' => $this->map5_desc,

            // FOREIGN
            'id_project' => $id_proj_maps,
            'species' => $this->species,
            'species_popular' => $this->species_popular,
            'family' => $this->family,
            'SISGEN' => $this->SISGEN,
            'institution' => $this->institution,
            'coordination' => $this->coordination,
            'financial_support' => $this->financial_support,
            'publication_maps' => $this->publication_maps,
            'repository_maps' => $this->repository_maps,
            'status' => $this->status,
            'main_researcher' => $this->main_researcher,
            'responsavel' => $this->responsavel,

            ]);

            $map1_name = $this->map1_file->hashName();
            $map1_localpath = $this->map1_file->storePublicly('maps', 'public');
            $map1_publicpath = asset($map1_localpath);

            $map2_name = $this->map2_file->hashName();
            $map2_localpath = $this->map2_file->storePublicly('maps', 'public');
            $map2_publicpath = asset($map2_localpath);

            $map3_name = $this->map3_file->hashName();
            $map3_localpath = $this->map3_file->storePublicly('maps', 'public');
            $map3_publicpath = asset($map3_localpath);

            $map4_name = $this->map4_file->hashName();
            $map4_localpath = $this->map4_file->storePublicly('maps', 'public');
            $map4_publicpath = asset($map4_localpath);

            $map5_name = $this->map5_file->hashName();
            $map5_localpath = $this->map5_file->storePublicly('maps', 'public');
            $map5_publicpath = asset($map5_localpath);

        $this->step++;

    }

    public function render()
    {
        return view('livewire.new-project', [
            'species' => $this->species,
        ]);
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
        $this->species = '';
        $this->species_popular = '';
        $this->family = '';
        $this->SISGEN = '';
        $this->institution = '';
        $this->coordination = '';
        $this->financial_support = '';
        $this->publication_mols = '';
        $this->publication_maps = '';
        $this->abstract = '';
        $this->repository_mols = '';
        $this->repository_maps = '';
        $this->exp_metadata = '';
        $this->status = '';
        $this->name_molecule = '';
        $this->mass = '';
        $this->formula = '';
        $this->IDPubChem = '';
        $this->applicability = '';
        $this->biblio_ref = '';
        $this->spectra_file = '';
        $this->mz = '';
        $this->int = '';
        $this->map_file = '';
        $this->map_abstract = '';
        $this->map_description = '';
    }

}
