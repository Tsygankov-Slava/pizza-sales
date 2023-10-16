<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Clients;
use App\Models\Basket;

class RegisterController extends Controller {
    public function submit(RegisterRequest $req): RedirectResponse {
        $clients = new Clients();
        $clients->first_name = $req->input('first_name');
        $clients->last_name = $req->input('last_name');
        $clients->login = $req->input('login');
        $clients->password = Hash::make($req->input('password'));
        $clients->birthday = $req->input('birthday');
        $clients->mail = $req->input('mail');
        $clients->phone = $req->input('phone');

        $clients->save();

        Auth::login($clients);

        $baskets = new Basket();
        $id = auth()->user()->id;
        $baskets->client_id = $id;
        $baskets->save();

        return redirect()->route('home')->with('success', 'Register completed successfully');
    }
}
