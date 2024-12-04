<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{

    public function register() {
        return view('auth.register');
    }

    public function registerCreate(Request $request) {

        $request->validate([
            'name' => 'required | max:255',
            'mail' => 'required'
        ]);

        


    }


}
