<?php

namespace App\Imports;

use App\Models\BiogeoProtectedAreas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BiogeoProtectedAreasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BiogeoProtectedAreas([
            'project_id'           => $row['project_id'],
            'total'                 => $row['total'],
            'federal'               => $row['federal'],
            'estadual'              => $row['estadual'],
            'municipal'             => $row['municipal'],
        ]);
    }
}
