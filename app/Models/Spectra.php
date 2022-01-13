<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spectra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_spectra',
        'mz',
        'int',
        'id_molecule',
        'name_molecule',
        'spectra_file',
        'main_researcher',
        'responsavel',
        'id_project',
    ];

    protected $casts = [
        'int' => 'array',
        'mz' => 'array',
    ];

    public function molecules()
    {
        return $this->belongsTo(NewMolecules::class, 'id_project', 'id_project');
        return $this->belongsTo(NewMolecules::class, 'id_molecule', 'id_molecule');
        return $this->belongsTo(NewMolecules::class, 'name_molecule', 'name_molecule');
        return $this->belongsTo(NewMolecules::class, 'spectra_file', 'spectra_file');

        return $this->belongsTo(NewProjects::class, 'main_researcher', 'main_researcher');
        return $this->belongsTo(NewProjects::class, 'responsavel', 'responsavel');
        return $this->belongsTo(NewProjects::class, 'id_project', 'responsavel');
    }
}
