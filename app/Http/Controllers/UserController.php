<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index(){
        $users = [
            ['id' => 1, 'name' => 'Ana Cruz', 'email' => 'ana@example.com'],
            ['id' => 2, 'name' => 'Ben Reyes', 'email' => 'ben@example.com'],
            ['id' => 3, 'name' => 'Carla Santos', 'email' => 'carla@example.com'],
            ['id' => 4, 'name' => 'Dan Garcia', 'email' => 'dan@example.com'],
            ['id' => 5, 'name' => 'Ella Ramos', 'email' => 'ella@example.com'],
        ];
        return view('users', ['users' => $users]);
    }
}