<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contato;

class ContatoController extends Controller
{
    function send(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        );

        Mail::to('contato@bioomiteca.com')->send(new Contato($data));
        return redirect('/#sent-message')->with('success', 'Agradecemos o seu contato!');
    }
}
