<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    function registerUser(Request $req){
        $req->validate([
            'name'=>'required' ,
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required'
        ]);
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $req->session()->put('username', $user['name']);
        $req->session()->put('email', $user['email']);
        $user->save();
        return view('profile', ['username'=>session('username'), 'email'=>session('email')]);
    }
}
