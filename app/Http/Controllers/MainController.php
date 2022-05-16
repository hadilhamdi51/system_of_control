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
   // function redirectTo(){
     //  if(auth::user()->admin){
        //    return 'admin-dashboard';

        //}
       // return 'welcome';
        

   // }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

   


}