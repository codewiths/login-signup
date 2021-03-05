<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAuthenticationController extends Controller
{
    function userLogin(Request $req){
        // $data = $req->input();
        $req->validate([
            'user'=>'required' ,
            'password'=>'required'
        ]);
        $username=$req->input('user');
        $password=$req->input('password');
        $checkLogin=DB::table('users')->where(['name'=>$username,'password'=>$password])->get();
        if(count($checkLogin)>0) {
            $data=$req->input();
            $req->session()->put('user',$username);
            return redirect('profile');
        } else {
            return redirect('login');
        }
    }
}
