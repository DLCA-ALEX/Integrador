<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create () {
        return view('auth.register');
    }
    

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'fn' => 'required',
            'gen' => 'required',
            'password' => 'required|confirmed',
        ]);


        $user = User::create(request(['name', 'email', 'fn', 'gen', 'password'])); 

        auth()->login($user);
        return redirect()->to('/');
    }
}
