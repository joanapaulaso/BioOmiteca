<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewProjects;
use App\Http\Livewire\NewProject;

class Curadoria extends Component
{
    public function render()
    {
        $metadados_all = NewProjects::all();
        return view('livewire.curadoria', [
            'metadados_all' => $metadados_all,
        ]);
    }
}
