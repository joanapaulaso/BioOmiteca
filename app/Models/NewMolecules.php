<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMolecules extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_molecule';

    protected $fillable = [
        'id_molecule',
        'name_molecule',
        'mass',
        'formula',
        'adduct',
        'IDPubChem',
        'applicability',
        'biblio_ref',
        'spectra_file',
        'id_project',
        'species',
        'species_popular',
        'family',
        'SISGEN',
        'institution',
        'coordination',
        'financial_support',
        'publication_mols',
        'repository_mols',
        'status',
        'main_researcher',
        'responsavel',
    ];

    public function projects()
    {
        return $this->belongsTo(NewProject::class, 'id_project', 'id_project');
        return $this->belongsTo(NewProject::class, 'species', 'species');
        return $this->belongsTo(NewProject::class, 'species_popular', 'species_popular');
        return $this->belongsTo(NewProject::class, 'family', 'family');
        return $this->belongsTo(NewProject::class, 'SISGEN', 'SISGEN');
        return $this->belongsTo(NewProject::class, 'institution', 'institution');
        return $this->belongsTo(NewProject::class, 'coordination', 'coordination');
        return $this->belongsTo(NewProject::class, 'financial_support', 'financial_support');
        return $this->belongsTo(NewProject::class, 'publication_mols', 'publication_mols');
        return $this->belongsTo(NewProject::class, 'repository_mols', 'repository_mols');
        return $this->belongsTo(NewProject::class, 'status', 'status');
        return $this->belongsTo(NewProject::class, 'main_researcher', 'main_researcher');
        return $this->belongsTo(NewProject::class, 'responsavel', 'responsavel');
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name_molecule', 'like', '%'. $query .'%')
                ->orWhere('species', 'like', '%'. $query .'%');
    }

}
