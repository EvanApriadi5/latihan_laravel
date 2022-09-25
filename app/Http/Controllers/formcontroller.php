<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class formcontroller extends Controller
{
    //
    public function register() {
            return view('form.register');
        
    }

    public function postdata(Request $request) {
        $username = $request->username;
        $password = Hash::make($request->password);

        return view('form.output', compact('username', 'password') );
    
    }
}
