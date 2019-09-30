<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserConntroller extends Controller
{
    
    // public function username(){
    //     return 'username';
    // }



    public function login(Request $request){
        
        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return "done";
        }
        return "false";
    }
}
