<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    
    function profile(){
        return view('admin.profile');
    }
    function exmp(){
        return view('reclamations.exmp');
    }
    
    
   
        
    


    
}
