<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public static function create(){
        return view ('users.register');
    }
    public static function store(Request $request){
        $formField = $request->validate(['name' => 'required',
            'email' =>['required', 'email',Rule::unique('users', 'email')],
            'password' =>['required','confirmed']
        ]);
        $formField['password'] = bcrypt($formField['password']);
        $user=   User::create($formField);
        //login?
        auth()->login($user);
        return redirect('/')->with('message', 'Your account has been created.');
    }

    public static function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Logged out.');
    }

    public static function login(   ){
        return view('users.login');
    } public static function authenticate(Request $request){
        $formField = $request->validate([
            'email' =>['required', 'email'],
            'password' =>['required']
        ]);;
        if(auth()->attempt($formField)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Logged in.');

        }
        return  back()->withErrors(['email'=>'Invalid Credentials.']);
    }
}
