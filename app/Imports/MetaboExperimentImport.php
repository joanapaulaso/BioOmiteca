<?php

namespace App\Imports;

use App\Models\MetaboExperiment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MetaboExperimentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MetaboExperiment([
            'project_id'           => $row['project_id'],
            'plant_organ'           => $row['plant_organ'],
            'extraction_summary'    => $row['extraction_summary'],
            'instrument'            => $row['instrument'],
            'approach'              => $row['approach'],
            'ion_mode'              => $row['ion_mode'],
            'id_software'           => $row['id_software'],
        ]);
    }
}
