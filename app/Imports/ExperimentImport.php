<?php

namespace App\Imports;

use App\Imports\MetaboExperimentImport;
use App\Imports\BiogeoExperimentImport;
use App\Imports\BiogeoProtectedAreasImport;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExperimentImport implements WithMultipleSheets
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function sheets(): array
    {
        return [
            'metabo'        => new MetaboExperimentImport(),
            'biogeo_meta'   => new BiogeoExperimentImport(),
            'biogeo_pa'     => new BiogeoProtectedAreasImport(),
        ];
    }
}
