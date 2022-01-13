<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProjects extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_project';

    protected $fillable = [
        'main_researcher',
        'responsavel',
        'id_project',
        'species',
        'world_flora_link',
        'species_popular',
        'family',
        'SISGEN',
        'institution',
        'coordination',
        'financial_support',
        'publication_mols',
        'publication_maps',
        'abstract',
        'repository_mols',
        'repository_maps',
        'status',
    ];

    public function experiment()
    {
        return $this->hasMany(NewExperiment::class, 'id_project', 'id_project');
        return $this->hasMany(NewExperiment::class, 'species', 'species');
        return $this->hasMany(NewExperiment::class, 'species_popular', 'species_popular');
        return $this->hasMany(NewExperiment::class, 'family', 'family');
        return $this->hasMany(NewExperiment::class, 'SISGEN', 'SISGEN');
        return $this->hasMany(NewExperiment::class, 'institution', 'institution');
        return $this->hasMany(NewExperiment::class, 'coordination', 'coordination');
        return $this->hasMany(NewExperiment::class, 'financial_support', 'financial_support');
        return $this->hasMany(NewExperiment::class, 'publication_mols', 'publication_mols');
        return $this->hasMany(NewExperiment::class, 'repository_mols', 'repository_mols');
        return $this->hasMany(NewExperiment::class, 'status', 'status');
        return $this->hasMany(NewExperiment::class, 'main_researcher', 'main_researcher');
        return $this->hasMany(NewExperiment::class, 'responsavel', 'responsavel');
    }

    public function molecules()
    {
        return $this->hasMany(NewMolecules::class, 'id_project', 'id_project');
        return $this->hasMany(NewMolecules::class, 'species', 'species');
        return $this->hasMany(NewMolecules::class, 'species_popular', 'species_popular');
        return $this->hasMany(NewMolecules::class, 'family', 'family');
        return $this->hasMany(NewMolecules::class, 'SISGEN', 'SISGEN');
        return $this->hasMany(NewMolecules::class, 'institution', 'institution');
        return $this->hasMany(NewMolecules::class, 'coordination', 'coordination');
        return $this->hasMany(NewMolecules::class, 'financial_support', 'financial_support');
        return $this->hasMany(NewMolecules::class, 'publication_mols', 'publication_mols');
        return $this->hasMany(NewMolecules::class, 'repository_mols', 'repository_mols');
        return $this->hasMany(NewMolecules::class, 'status', 'status');
        return $this->hasMany(NewMolecules::class, 'main_researcher', 'main_researcher');
        return $this->hasMany(NewMolecules::class, 'responsavel', 'responsavel');
    }

    public function spectra()
    {
        return $this->hasMany(Spectra::class, 'main_researcher', 'main_researcher');
        return $this->hasMany(Spectra::class, 'responsavel', 'responsavel');
        return $this->hasMany(Spectra::class, 'id_project', 'responsavel');
    }

    public function maps()
    {
        return $this->hasMany(NewMaps::class, 'id_project', 'id_project');
        return $this->hasMany(NewMaps::class, 'species', 'species');
        return $this->hasMany(NewMaps::class, 'species_popular', 'species_popular');
        return $this->hasMany(NewMaps::class, 'family', 'family');
        return $this->hasMany(NewMaps::class, 'SISGEN', 'SISGEN');
        return $this->hasMany(NewMaps::class, 'institution', 'institution');
        return $this->hasMany(NewMaps::class, 'coordination', 'coordination');
        return $this->hasMany(NewMaps::class, 'financial_support', 'financial_support');
        return $this->hasMany(NewMaps::class, 'publication_maps', 'publication_maps');
        return $this->hasMany(NewMaps::class, 'repository_maps', 'repository_maps');
        return $this->hasMany(NewMaps::class, 'status', 'status');
        return $this->hasMany(NewMaps::class, 'main_researcher', 'main_researcher');
        return $this->hasMany(NewMaps::class, 'responsavel', 'responsavel');
    }
}
