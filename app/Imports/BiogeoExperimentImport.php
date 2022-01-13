<?php

namespace App\Imports;

use App\Models\BiogeoExperiment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BiogeoExperimentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BiogeoExperiment([
            'project_id'        => $row['project_id'],
            'resolution'        => $row['resolution'],
            'imp_var_1'         => $row['imp_var_1'],
            'imp_var_2'         => $row['imp_var_2'],
            'imp_var_3'         => $row['imp_var_3'],
            'imp_var_4'         => $row['imp_var_4'],
            'imp_var_5'         => $row['imp_var_5'],
            'algorithms'        => $row['algorithms'],
            'ensemble'          => $row['ensemble'],
        ]);
    }
}
