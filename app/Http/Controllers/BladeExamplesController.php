<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $title = "Título do Alerta";
        $message = "Mensagem do alerta";

        return view('index', [
            'title' => $title,
            'message' => $message
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:3',
        ]);

        return redirect()->back()->with('success', 'Enviado com sucesso!');
    }
}