<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{

    public function __construct() {
        // インスタンス化
        $this->user = new User();
    }


    public function register() {
        return view('auth.register');
    }

    public function registerCreate(Request $request) {

        $request->validate([
            'name' => 'required | max:255',
            'mail' => 'required',
            'pass' => 'required'
        ]);

        //新規登録
        $registerUser = $this->user->InsertUser($request);

         return redirect()->route('login');

    }


}
