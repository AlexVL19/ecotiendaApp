<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function create() {
        return view('auth.login');
    }

    public function store() {
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors(
                ['message' => 'El correo o la contraseña son incorrectos. Por favor, intente de nuevo.',]
            );
        }

        return redirect()->to('/');
}

    public function destroy() {
        auth()->logout();

        return redirect()->to('/');
    }

    public function show() {
        $data = Auth::user();
        return view('auth.show', compact('data'));
    }
}
