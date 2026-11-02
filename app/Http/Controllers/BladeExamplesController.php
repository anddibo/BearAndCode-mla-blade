<?php

namespace App\Http\Controllers;

class BladeExamplesController extends Controller
{
    public function index()
    {
        $users = [
            ['user_id' => 1, 'name' => 'John Doe'],
            ['user_id' => 2, 'name' => 'Jane Doe'],
            ['user_id' => 3, 'name' => 'John Smith'],
            ['user_id' => 4, 'name' => 'Jane Smith']
        ];

        $users2 = [];
        $count = 0;

        return view('index', [
            'users' => $users,
            'users2' => $users2,
            'count' => $count
        ]);
    }

    public function secondPage()
    {
        return view('second', ['menu' => ['dashboard', 'about', 'users']]);
    }
}