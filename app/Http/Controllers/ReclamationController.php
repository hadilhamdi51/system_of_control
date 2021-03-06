<?php

namespace App\Http\Controllers;
use App\Models\reclamation;
use App\Models\composant;
use App\Models\classroom;
use App\Models\User;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReclamationController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function exmp()
    {
        $reclamations= reclamation::all();;
        return view('reclamations.exmp',compact('reclamations'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamations=(Auth::user()->reclamations);
        return view('reclamations.index',compact('reclamations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('reclamations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'user_id' => 'required',
            'description' => 'required',
            'etat' => 'required',
        ]);

        $reclamation = new Reclamation;
        $reclamation->description = $request->description;
        $reclamation->user_id = $request->user_id;
       
        $reclamation->etat = $request->etat;
        $reclamation->save();

        return redirect()
            ->route('reclamations.index');
    
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
        return view('reclamations.edit', compact('reclamations'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $event
     * @return \Illuminate\Http\Response
     */
    public function handle(reclamcreateEvent $event)
    {
        dd($event->reclamation->action . 'DONE' );
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
        $validatedData= $request->validate([
            'description' => 'required',
           /*'user_id' => 'required',*/
            'etat' => 'required',
            
          ]);
        Reclamation::whereId($id)->update($validatedData);
    
        return redirect()->route('reclamations.index');
    
    }

    public function updateEtat(Request $request, $id)
    {
        $validatedData = [$etat = 1];
        Reclamation::whereId($id)->update($validatedData);
        return redirect()->route('reclamations.index');
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
 
  
}
