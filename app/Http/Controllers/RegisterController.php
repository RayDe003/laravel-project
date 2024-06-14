<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('register');
    }

    public function register(Request $request){

        $user = User::create([
            'login' => $request ->login,
            'password' =>  Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }
}
