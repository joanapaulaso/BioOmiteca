<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AvaliarProjeto extends Component
{
    public function render(Request $request)
    {
        $id_project = $request->path();
        $id_project = str_replace("avaliar-projeto/", "", $id_project);
        $id_project = DB::table('new_projects')->where('id_project', '=', $id_project)->get();
        $project = collect($id_project)->keyBy('id_project')->keys()->pop();

        $main_researcher = collect($id_project)->keyBy('main_researcher')->keys()->pop();
        $responsavel = collect($id_project)->keyBy('responsavel')->keys()->pop();
        $species = collect($id_project)->keyBy('species')->keys()->pop();
        $species_popular = collect($id_project)->keyBy('species_popular')->keys()->pop();
        $family = collect($id_project)->keyBy('family')->keys()->pop();
        $SISGEN = collect($id_project)->keyBy('SISGEN')->keys()->pop();
        $institution = collect($id_project)->keyBy('institution')->keys()->pop();
        $coordination = collect($id_project)->keyBy('coordination')->keys()->pop();
        $financial_support = collect($id_project)->keyBy('financial_support')->keys()->pop();
        $publication_mols = collect($id_project)->keyBy('publication_mols')->keys()->pop();
        $publication_maps = collect($id_project)->keyBy('publication_maps')->keys()->pop();
        $abstract = collect($id_project)->keyBy('abstract')->keys()->pop();
        $repository_mols = collect($id_project)->keyBy('repository_mols')->keys()->pop();
        $repository_maps = collect($id_project)->keyBy('repository_maps')->keys()->pop();
        $status = collect($id_project)->keyBy('status')->keys()->pop();

        $metabo_metadata = DB::table('metabo_experiments')->where('project_id', '=', $project)->get();

        $plant_organ = collect($metabo_metadata)->keyBy('plant_organ')->keys()->pop();
        $extraction_summary = collect($metabo_metadata)->keyBy('extraction_summary')->keys()->pop();
        $instrument = collect($metabo_metadata)->keyBy('instrument')->keys()->pop();
        $approach = collect($metabo_metadata)->keyBy('approach')->keys()->pop();
        $ion_mode = collect($metabo_metadata)->keyBy('ion_mode')->keys()->pop();
        $id_software = collect($metabo_metadata)->keyBy('id_software')->keys()->pop();

        $biogeo_metadata = DB::table('biogeo_experiments')->where('project_id', '=', $project)->get();
        $metadata_pa = DB::table('biogeo_protected_areas')->where('project_id', '=', $project)->get();

        $algorithms = collect($biogeo_metadata)->keyBy('algorithms')->keys()->pop();
        $ensemble = collect($biogeo_metadata)->keyBy('ensemble')->keys()->pop();
        $imp_var_1 = collect($biogeo_metadata)->keyBy('imp_var_1')->keys()->pop();
        $imp_var_2 = collect($biogeo_metadata)->keyBy('imp_var_2')->keys()->pop();
        $imp_var_3 = collect($biogeo_metadata)->keyBy('imp_var_3')->keys()->pop();
        $imp_var_4 = collect($biogeo_metadata)->keyBy('imp_var_4')->keys()->pop();
        $imp_var_5 = collect($biogeo_metadata)->keyBy('imp_var_5')->keys()->pop();
        $resolution = collect($biogeo_metadata)->keyBy('resolution')->keys()->pop();

        $total = collect($metadata_pa)->keyBy('total')->keys()->pop();
        $federal = collect($metadata_pa)->keyBy('federal')->keys()->pop();
        $estadual = collect($metadata_pa)->keyBy('estadual')->keys()->pop();
        $municipal = collect($metadata_pa)->keyBy('municipal')->keys()->pop();

        $map = DB::table('new_maps')->where('id_project', '=', $project)->get();
        $map1_file = collect($map)->keyBy('map1_file')->keys()->pop();
        $map1_desc = collect($map)->keyBy('map1_desc')->keys()->pop();
        $map2_file = collect($map)->keyBy('map2_file')->keys()->pop();
        $map2_desc = collect($map)->keyBy('map2_desc')->keys()->pop();
        $map3_file = collect($map)->keyBy('map3_file')->keys()->pop();
        $map3_desc = collect($map)->keyBy('map3_desc')->keys()->pop();
        $map4_file = collect($map)->keyBy('map4_file')->keys()->pop();
        $map4_desc = collect($map)->keyBy('map4_desc')->keys()->pop();
        $map5_file = collect($map)->keyBy('map5_file')->keys()->pop();
        $map5_desc = collect($map)->keyBy('map5_desc')->keys()->pop();

        $mols = DB::table('new_molecules')->where('id_project', '=', $project)->get();
        $spectra = DB::table('spectras')->where('id_project', '=', $project)->get();
        $spectraCount = collect($spectra)->count();

        $biblio_ref = collect($mols)->keyBy('biblio_ref')->keys()->pop();

        foreach ($spectra as $key => $value)
        {
            $mz[$key] = collect($spectra)->keyBy('mz')->keys()->pop();
            $int[$key] = collect($spectra)->keyBy('int')->keys()->pop();

        }

        return view('livewire.avaliar-projeto', [

            'mols' => $mols,
            'biblio_ref' => $biblio_ref,
            'main_researcher' => $main_researcher,
            'responsavel' => $responsavel,
            'id_project' => $id_project,
            'project' => $project,
            'species' => $species,
            'species_popular' => $species_popular,
            'family' => $family,
            'SISGEN' => $SISGEN,
            'institution' => $institution,
            'coordination' => $coordination,
            'financial_support' => $financial_support,
            'publication_mols' => $publication_mols,
            'publication_maps' => $publication_maps,
            'abstract' => $abstract,
            'repository_mols' => $repository_mols,
            'repository_maps' => $repository_maps,
            'status' => $status,
            'spectraCount' => $spectraCount,
            'plant_organ' => $plant_organ,
            'extraction_summary' => $extraction_summary,
            'instrument' => $instrument,
            'approach' => $approach,
            'ion_mode' => $ion_mode,
            'id_software' => $id_software,
            'map1_file' => $map1_file,
            'map1_desc' => $map1_desc,
            'map2_file' => $map2_file,
            'map2_desc' => $map2_desc,
            'map3_file' => $map3_file,
            'map3_desc' => $map3_desc,
            'map4_file' => $map4_file,
            'map4_desc' => $map4_desc,
            'map5_file' => $map5_file,
            'map5_desc' => $map5_desc,
            'algorithms' => $algorithms,
            'ensemble' => $ensemble,
            'imp_var_1' => $imp_var_1,
            'imp_var_2' => $imp_var_2,
            'imp_var_3' => $imp_var_3,
            'imp_var_4' => $imp_var_4,
            'imp_var_5' => $imp_var_5,
            'resolution' => $resolution,
            'total' => $total,
            'federal' => $federal,
            'estadual' => $estadual,
            'municipal' => $municipal,
        ]);
    }

    public function statusRevisao($project)
    {
        // dd($nome_projeto);

        $status_project = DB::table('new_projects')->where('id_project', '=', $project)->update([
            'status' => 1
        ]);

        session()->flash('msg_usuario','Status atualizado para "necessita de revisão"');
        return redirect()->to("/avaliar-projeto/$project");
    }

    public function statusAceito($project)
    {
        $status_project = DB::table('new_projects')->where('id_project', '=', $project)->update([
            'status' => 2
        ]);

        session()->flash('msg_usuario','Status atualizado para "Aceito"');
        return redirect()->to("/avaliar-projeto/$project");
    }
}
