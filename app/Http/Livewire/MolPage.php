<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MolPage extends Component
{
    protected $listeners = ['destroy'];

    public function render(Request $request)
    {
        $mol = $request->path();
        $mol = str_replace("mol/", "", $mol);
        $mol = DB::table('new_molecules')->where('id_molecule', '=', $mol)->get();
        $project_id = collect($mol)->keyBy('id_project')->keys()->pop();
        $name_mol = collect($mol)->keyBy('name_molecule')->keys()->pop();
        $id_molecule = collect($mol)->keyBy('id_molecule')->keys()->pop();
        $spectra_file = collect($mol)->keyBy('spectra_file')->keys()->pop();
        $responsavel = collect($mol)->keyBy('responsavel')->keys()->pop();
        $species = collect($mol)->keyBy('species')->keys()->pop();
        $formula = collect($mol)->keyBy('formula')->keys()->pop();
        $mass = collect($mol)->keyBy('mass')->keys()->pop();
        $IDPubChem = collect($mol)->keyBy('IDPubChem')->keys()->pop();
        $applicability = collect($mol)->keyBy('applicability')->keys()->pop();
        $biblio_ref = collect($mol)->keyBy('biblio_ref')->keys()->pop();

        $institution = collect($mol)->keyBy('institution')->keys()->pop();
        $responsavel = collect($mol)->keyBy('responsavel')->keys()->pop();
        $coordination = collect($mol)->keyBy('coordination')->keys()->pop();
        $species_popular = collect($mol)->keyBy('species_popular')->keys()->pop();
        $family = collect($mol)->keyBy('family')->keys()->pop();
        $SISGEN = collect($mol)->keyBy('SISGEN')->keys()->pop();
        $publication_mols = collect($mol)->keyBy('publication_mols')->keys()->pop();
        $repository_mols = collect($mol)->keyBy('repository_mols')->keys()->pop();

        $general = DB::table('new_projects')->where('id_project', '=', $project_id)->get();
        $world_flora_link = collect($general)->keyBy('world_flora_link')->keys()->pop();

        $metadata = DB::table('metabo_experiments')->where('project_id', '=', $project_id)->get();
        $plant_organ = collect($metadata)->keyBy('plant_organ')->keys()->pop();
        $extraction_summary = collect($metadata)->keyBy('extraction_summary')->keys()->pop();
        $instrument = collect($metadata)->keyBy('instrument')->keys()->pop();
        $approach = collect($metadata)->keyBy('approach')->keys()->pop();
        $ion_mode = collect($metadata)->keyBy('ion_mode')->keys()->pop();
        $id_software = collect($metadata)->keyBy('id_software')->keys()->pop();

        return view('livewire.mol-page', [
            'name_mol' => $name_mol,
            'id_molecule' => $id_molecule,
            'spectra_file' => $spectra_file,
            'responsavel' => $responsavel,
            'species' => $species,
            'world_flora_link' => $world_flora_link,
            'formula' => $formula,
            'mass' => $mass,
            'IDPubChem' => $IDPubChem,
            'applicability' => $applicability,
            'biblio_ref' => $biblio_ref,
            'plant_organ' => $plant_organ,
            'extraction_summary' => $extraction_summary,
            'instrument' => $instrument,
            'approach' => $approach,
            'ion_mode' => $ion_mode,
            'id_software' => $id_software,
            'institution' => $institution,
            'responsavel' => $responsavel,
            'coordination' => $coordination,
            'species_popular' => $species_popular,
            'family' => $family,
            'SISGEN' => $SISGEN,
            'publication_mols' => $publication_mols,
            'repository_mols' => $repository_mols,
        ]);
    }

    public function destroy($mol)
    {
        DB::table('new_molecules')->where('id_molecule', '=', $mol)->delete();
    }

}
