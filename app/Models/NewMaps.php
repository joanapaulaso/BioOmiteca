<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMaps extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mapa';

    protected $fillable = [
        'id_maps',
        'maps_abstract',
        'map1_file',
        'map1_desc',
        'map2_file',
        'map2_desc',
        'map3_file',
        'map3_desc',
        'map4_file',
        'map4_desc',
        'map5_file',
        'map5_desc',
        'id_project',
        'species',
        'species_popular',
        'family',
        'SISGEN',
        'institution',
        'coordination',
        'financial_support',
        'publication_maps',
        'repository_maps',
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
        return $this->belongsTo(NewProject::class, 'publication_maps', 'publication_maps');
        return $this->belongsTo(NewProject::class, 'repository_maps', 'repository_maps');
        return $this->belongsTo(NewProject::class, 'status', 'status');
        return $this->belongsTo(NewProject::class, 'main_researcher', 'main_researcher');
        return $this->belongsTo(NewProject::class, 'responsavel', 'responsavel');
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('species', 'like', '%'. $query .'%');
    }

}
