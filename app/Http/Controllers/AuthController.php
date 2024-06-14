<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showAuthPage()
    {
        return view('first');
    }

    public function showAuthForm()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return view('second');
        }

        $message = 'неверные учетные данные лох ебаный';
        return ($message);
    }
}
