<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=student::all();
        return view('students.index',compact('students'));
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
        $student = new student();
        $student->first_name = $request->first_name;
        $student->last_name  = $request->last_name;
        $student->email  = $request->email;
        $student->image  = $request->image;
        $student->department_id  = $request->department_id;
        $student->classe  = $request->class;
        $student->state  = $request->state;
        $student->created_at = $request->created_at;
        $student->updated_at = $request->updated_at;
        $student>save();
        return redirect()->route('students.show', $student->id)->with('success', 'students created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = student::findOrFail($id);
        return view('students.show', compact('students'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

  

        $student =student::findOrFail($id);
        $student = new reclamation();
        $student->first_name = $request->first_name;
        $student->last_name  = $request->last_name;
        $student->email  = $request->email;
        $student->image  = $request->image;
        $student->department_id  = $request->department_id;
        $student->classe  = $request->class;
        $student->state  = $request->state;
        $student->created_at = $request->created_at;
        $student->updated_at = $request->updated_at;
        $student>save();
        return redirect()->route('students.show', $reclamation->id)->with('success', 'student created successfully');
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
