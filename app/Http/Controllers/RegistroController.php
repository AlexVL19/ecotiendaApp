<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {

        $user = User::create(request(['name', 'sndname', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');
    }
}
