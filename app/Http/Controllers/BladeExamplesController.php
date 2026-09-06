<?php

namespace App\Http\Controllers;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'Anderson Dibo',
            'biography' => "<p>Nome: <strong>Anderson Dibo</strong></p><br/>
                      <p>Idade: <strong>49 anos</strong></p><br/>
                      <p>Cidade Natal: <strong>Petrópolis</strong></p>"
        ];

        return view('index', [
            'user' => $user
        ]);
    }
}