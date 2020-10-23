<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function contato(Request $request) 
    {
        Mail::send('email.contato', $request->all(), function ($message)
        {
            $message->to('umemail@teste.com')
                    ->subject('Contato via site');
        });

        return redirect('contato/1');
    }
}
