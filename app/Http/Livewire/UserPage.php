<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserPage extends Component
{
    public function render(Request $request)
    {

        $usuario = $request->path();
        $usuario = str_replace("user/", "", $usuario);
        $usuario = DB::table('users')->where('id', '=', $usuario)->get();
        $id_usuario = collect($usuario)->keyBy('id')->keys()->pop();
        $email = collect($usuario)->keyBy('email')->keys()->pop();
        $acesso = collect($usuario)->keyBy('is_admin')->keys()->pop();

        return view('livewire.user-page', [
            'id_usuario' => $id_usuario,
            'email' => $email,
            'acesso' => $acesso
        ]);
    }
}
