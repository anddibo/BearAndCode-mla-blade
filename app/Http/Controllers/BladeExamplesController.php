<?php

namespace App\Http\Controllers;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $user = [
            'id' => 2,
            'admin' => false,
            'name' => 'Anderson Dibo',            
            'biography' => "<p>Idade: <strong>49 anos</strong></p><br/>"
        ];

        return view('index', [
            'user' => $user
        ]);
    }
}