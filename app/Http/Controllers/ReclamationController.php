<?php

namespace App\Http\Controllers;
use App\Models\reclamation;
use App\Models\composant;
use App\Models\classroom;
use App\Models\User;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamations=reclamation::all();
        return view('reclamations.index',compact('reclamations')); 

    }
    public function addreclam()
    {
        $reclamations=reclamation::all();
        return view('reclamations.addreclam',compact('reclamations')); 

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $composants= composant::all();
        $classes= classroom::all();
        $users= User::all();
        return view('reclamations.create', compact('composants', 'classes','users'));
       
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
        $reclamation = new reclamation();
        $reclamation->description = $request->description;
        $reclamation->user_id = $request->user_id;
        $reclamation->classroom_id = $request->classroom_id;
        $reclamation->composant_id = $request->composant_id;
        $reclamation->save();
        return redirect()->route('reclamations.index')->with('success', 'Post created successfully');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reclamations = reclamation::findOrFail($id);
        return view('reclamations.show', compact('reclamations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reclamations = reclamation::findOrFail($id);
        return view('reclamations.edit', compact('reclamation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->validationRules());

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
        //
    }
    private function validationRules()
    {
        return [
            'descreption' => ['required', 'min:20', 'max:255'],
            'created_at' => 'required|min:10',
            'updated_at' => 'required|min:10',
            
        ];
    }
}
