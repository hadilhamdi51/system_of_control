<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function redirectTo(){
        if(auth::user()->admin){
            return 'admin-dashboard';

        }
        return '/';

        

    }

   

   


}