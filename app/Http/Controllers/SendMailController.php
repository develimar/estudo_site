<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function lead(Request $request)
    {
        $nome = $request->nome;
        $telefone = $request->telefone;
        $email = $request->email;

        $data = [
            'nome' => $nome,
            'telefone' => $telefone,
            'email' => $email
        ];

        Mail::to('elimar.pc@gmail.com')->send(new SendMail($data));
        return redirect()->route('home');
    }
}
