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
        $map = DB::table('new_maps')->where('id_maps', '=', $map)->get();
        $project_id = collect($map)->keyBy('id_project')->keys()->pop();
        $responsavel = collect($map)->keyBy('responsavel')->keys()->pop();
        $species = collect($map)->keyBy('species')->keys()->pop();
        $maps_abstract = collect($map)->keyBy('maps_abstract')->keys()->pop();
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

        $institution = collect($map)->keyBy('institution')->keys()->pop();
        $responsavel = collect($map)->keyBy('responsavel')->keys()->pop();
        $coordination = collect($map)->keyBy('coordination')->keys()->pop();
        $species_popular = collect($map)->keyBy('species_popular')->keys()->pop();
        $family = collect($map)->keyBy('family')->keys()->pop();
        $SISGEN = collect($map)->keyBy('SISGEN')->keys()->pop();
        $publication_maps = collect($map)->keyBy('publication_maps')->keys()->pop();
        $repository_maps = collect($map)->keyBy('repository_maps')->keys()->pop();

        $metadata_exp = DB::table('biogeo_experiments')->where('project_id', '=', $project_id)->get();
        $metadata_pa = DB::table('biogeo_protected_areas')->where('project_id', '=', $project_id)->get();

        $algorithms = collect($metadata_exp)->keyBy('algorithms')->keys()->pop();
        $ensemble = collect($metadata_exp)->keyBy('ensemble')->keys()->pop();
        $imp_var_1 = collect($metadata_exp)->keyBy('imp_var_1')->keys()->pop();
        $imp_var_2 = collect($metadata_exp)->keyBy('imp_var_2')->keys()->pop();
        $imp_var_3 = collect($metadata_exp)->keyBy('imp_var_3')->keys()->pop();
        $imp_var_4 = collect($metadata_exp)->keyBy('imp_var_4')->keys()->pop();
        $imp_var_5 = collect($metadata_exp)->keyBy('imp_var_5')->keys()->pop();
        $resolution = collect($metadata_exp)->keyBy('resolution')->keys()->pop();

        $total = collect($metadata_pa)->keyBy('total')->keys()->pop();
        $federal = collect($metadata_pa)->keyBy('federal')->keys()->pop();
        $estadual = collect($metadata_pa)->keyBy('estadual')->keys()->pop();
        $municipal = collect($metadata_pa)->keyBy('municipal')->keys()->pop();

        $general = DB::table('new_projects')->where('id_project', '=', $project_id)->get();
        $world_flora_link = collect($general)->keyBy('world_flora_link')->keys()->pop();

        return view('livewire.map-page', [
            'responsavel' => $responsavel,
            'world_flora_link' => $world_flora_link,
            'species' => $species,
            'maps_abstract' => $maps_abstract,
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
            'institution' => $institution,
            'responsavel' => $responsavel,
            'coordination' => $coordination,
            'species_popular' => $species_popular,
            'family' => $family,
            'SISGEN' => $SISGEN,
            'publication_maps' => $publication_maps,
            'repository_maps' => $repository_maps,
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

}
