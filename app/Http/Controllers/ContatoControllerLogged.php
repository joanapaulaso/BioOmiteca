<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoLogged;

class ContatoControllerLogged extends Controller
{
    function send(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        );

        Mail::to('contato@bioomiteca.com')->send(new ContatoLogged($data));
        return redirect('/contact/#sent-message-logged')->with('success-logged', 'Agradecemos o seu contato!');
    }
}
