<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaboExperiment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_metabo_experiment';

    protected $fillable = [
        'project_id',
        'plant_organ',
        'extraction_summary',
        'instrument',
        'approach',
        'ion_mode',
        'id_software',
    ];

}
