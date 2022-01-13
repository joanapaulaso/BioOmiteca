<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiogeoExperiment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_biogeo_experiment';

    protected $fillable = [
        'project_id',
        'resolution',
        'imp_var_1',
        'imp_var_2',
        'imp_var_3',
        'imp_var_4',
        'imp_var_5',
        'algorithms',
        'ensemble',
    ];
}
