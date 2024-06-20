<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as HttpRequest;

class AuthController extends Controller{
    public function login(HttpRequest $request){
        $request->email;
        $request->password;

        return $request->email . $request->password;
    }
};


?>