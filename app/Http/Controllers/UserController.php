<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users = [
        [
            'id' => 1,
            'name' => 'Juan dela Cruz',
            'email' => 'juan.delacruz@example.com',
            'age' => 17,
            'favorite_color' => 'Pink',
        ],
        [
            'id' => 2,
            'name' => 'Maria Clara',
            'email' => 'maria.clara@example.com',
            'age' => 16,
            'favorite_color' => 'Purple',
        ],
        [
            'id' => 3,
            'name' => 'Pedro Penduko',
            'email' => 'pedro.penduko@example.com',
            'age' => 18,
            'favorite_color' => 'Orange',
        ],
        [
            'id' => 4,
            'name' => 'Ana Riza',
            'email' => 'ana.riza@example.com',
            'age' => 15,
            'favorite_color' => 'Yellow',
        ],
        [
            'id' => 5,
            'name' => 'Carlos Batangueño',
            'email' => 'carlos.batangueño@example.com',
            'age' => 19,
            'favorite_color' => 'Blue',
        ],
        [
            'id' => 6,
            'name' => 'Nina Santos',
            'email' => 'nina.santos@example.com',
            'age' => 17,
            'favorite_color' => 'Teal',
        ],
        [
            'id' => 7,
            'name' => 'Miguelito Reyes',
            'email' => 'miguelito.reyes@example.com',
            'age' => 16,
            'favorite_color' => 'Green',
        ],
        [
            'id' => 8,
            'name' => 'Luzviminda Cruz',
            'email' => 'luzviminda.cruz@example.com',
            'age' => 18,
            'favorite_color' => 'Red',
        ],
        [
            'id' => 9,
            'name' => 'Rafael Bagabaldo',
            'email' => 'rafael.bagabaldo@example.com',
            'age' => 17,
            'favorite_color' => 'Brown',
        ],
        [
            'id' => 10,
            'name' => 'Ella Mae',
            'email' => 'ella.mae@example.com',
            'age' => 15,
            'favorite_color' => 'Violet',
        ],
    ];
    
       
          public function index()
    {
        return view('account-list', ['users' => $this->users]);
    }

    public function show($id)
    {
        $user = User::find($id); // Find the user by ID
        if (!$user) {
            abort(404, 'User not found');
        }
        return view('user-details', compact('user')); 
    }
}