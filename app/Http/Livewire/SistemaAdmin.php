<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Spectra;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class SistemaAdmin extends Component
{

    use WithPagination;

    public function render()
    {
        $usuarios = DB::table('users')->paginate(10);

        return view('livewire.sistema-admin', [
            'usuarios' => $usuarios,
        ]);
    }
}
