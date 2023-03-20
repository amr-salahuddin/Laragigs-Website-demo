<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public static function create(){
        return view ('users.register');
    }
    public static function store(Request $request){
        $formField = $request->validate(['name' => 'required',
            'email' =>['required', 'email'],
            'password' =>['required']
        ]);
        User::create($formField);
        return view ('users.login');
    }
}
