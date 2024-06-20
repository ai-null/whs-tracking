<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where([
            'email' => "$request->email",
            'password' => "$request->password"
        ])->first();

        if ($user != null) {
            
            return redirect(route('halaman-search-admin'));
        } else {
            return redirect('/login');
        }
    }

    public function register(Request $request)
    {
        $user = User::create([
            'email' =>  $request->email,
            'password' => $request->password
        ]);

        event(new Registered($user));
        return redirect('/login');
    }
};
