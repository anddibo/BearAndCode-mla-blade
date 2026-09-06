<?php

namespace App\Http\Controllers;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'André'],
            ['id' => 2, 'name' => 'João'],
            ['id' => 3, 'name' => 'Maria'],
            ['id' => 4, 'name' => 'José'],
            ['id' => 5, 'name' => 'Ana'],
            ['id' => 6, 'name' => 'Carlos'],
            ['id' => 7, 'name' => 'Fernanda'],
            ['id' => 8, 'name' => 'Paulo'],
            ['id' => 9, 'name' => 'Juliana'],
            ['id' => 10, 'name' => 'Rafael']
        ];

        $users2 = [];
        $count = 0;

        return view('index', [
            'users' => $users,
            'users2' => $users2,
            'count' => $count
        ]);
    }
}