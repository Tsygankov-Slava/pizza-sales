<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller {
    public function submit(LoginRequest $req) {
        if (Auth::attempt([
            'login' => $req->input('login'),
            'password' => $req->input('password'),
        ])) {
            return redirect()->route('home')->with('success', 'Login completed successfully');
        }
        return redirect()->route('login')->with('success', 'Login failed');
    }

    public function logout(): RedirectResponse {
        auth('web')->logout();
        return redirect()->route('home');
    }
}
