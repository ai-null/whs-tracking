<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AuthController extends Controller{
    public function login(Request $request){
        $request->email;
        $request->password;

        return $request->email . $request->password;
    }

    // public function register2(Request $request) {
    //     // $request->validate([
    //     //     'name' => ['required', 'string', 'max:255'],
    //     //     'nisn' => ['required', 'string', 'max:10', 'unique:'.User::class],
    //     //     'password' => ['required', 'min:8', 'confirmed', Rules\Password::defaults()],
    //     // ], [
    //     //     'nisn.required'             => 'NISN perlu diisi.',
    //     //     // 'nisn.min:10'               => 'NISN harus 10 digit.',
    //     //     'nisn.unique'               => 'NISN telah terpakai.',
    //     //     'name.required'             => 'Nama perlu diisi.',
    //     //     'password.required'         => 'Password perlu diisi.',
    //     //     'password.min'              => 'Minimal password adalah :min.',
    //     //     'password.confirmed'        => 'Konfirmasi password salah.'
    //     // ]);

    //     // $user = User::create([
    //     //     'name' => $request->name,
    //     //     'nisn' => $request->nisn,
    //     //     'password' => Hash::make($request->password),
    //     // ]);

    //     // event(new Registered($user));
    //     // return redirect(route('login'));
    // }

    public function register(Request $request) {
        $user = User::create([
            'email' =>  $request->email,
            'password' => $request->password
        ]);

        event(new Registered($user));
        return redirect('/login');
    }
};


?>