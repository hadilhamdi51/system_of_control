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
       
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        
    ]);
    // alternative 1
    $user = new user();
    $user->name = $request->name;
    $user->email  = $request->email;
    $user->password  = $request->password;
    $user->save();
    return redirect()->route('users.index')->with('success', 'user created successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::findOrFail($id);
        return view('users.show',compact('user'));
        
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
    {     $validatedData= $request->validate([
        'name' => 'required|max:255',
        'email' => 'required',
        'admin' => 'required'
    ]);
    User::whereId($id)->update($validatedData);

    return redirect()->route('users.index')->with('success', 'user created successfully');

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