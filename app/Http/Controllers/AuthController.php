<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'      => ['required', 'email'],
            'password'  => ['required'],
        ], [
            'email.required'             => 'email perlu diisi.',
            'password.required'         => 'Password perlu diisi.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'errors'    => 'email atau Password salah.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:' . User::class],
            'password' => ['required', 'min:8', Rules\Password::defaults()],
        ], [
            'email.required'            => 'email perlu diisi.',
            'password.required'         => 'Password perlu diisi.',
            'password.min'              => 'Minimal password adalah :min.',
        ]);

        $user = User::create([
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        return redirect(route('login'))->with('registerSuccess', true);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('index'));
    }
};
