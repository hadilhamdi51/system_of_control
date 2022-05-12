<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users=user::all();
       return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        // alternative 1
        $user = new user();
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->email_verified_at  = $request->email_verified_at;
        $user->password  = $request->password;
        $user->remember_token  = $remember_token;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user>save();
        return redirect()->route('users.show', $user->id)->with('success', 'user created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = user::findOrFail($id);
        return view('users.show', compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $user = user::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $request->validate($this->validationRules());

        $user = user::findOrFail($id);
        $user = new reclamation();
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->email_verified_at  = $request->email_verified_at;
        $user->password  = $request->password;
        $user->remember_token  = $remember_token;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user>save();
        return redirect()->route('users.show', $reclamation->id)->with('success', 'user created successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'user deleted successfully');
     
    }
    private function validationRules()
    {
        return [
            'name' => ['required', 'min:5', 'max:255'],
            'email' => 'required|',
            'email_verified_at'=> 'required|',
            'password' => 'required|',
            'remember_token' => 'required|min:10',
            'created_at' => 'required|min:10',
            'updated_at' => 'required|min:10',
            
        ];
    }
}