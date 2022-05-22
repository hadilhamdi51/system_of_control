<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

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
    public function create(Request $request)
    {
        return view('students.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'department_id' => 'required',
            'email' => 'email',
            'class' => 'required',
            'state' => 'required',
        ]);

        $student = new Student;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->department_id = $request->department_id;
        $student->class = $request->class;
        $student->state = $request->state;
        $student->save();

        return redirect()
            ->route('students.index');
    
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
        $student = student::findOrFail($id);
        return view('students.edit', compact('student'));
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'department_id' => 'required',
            'class' => 'required',
            'state' => 'required'
          ]);
        Student::whereId($id)->update($validatedData);
    
        return redirect()->route('students.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }
    public function exportpdf()
    {    
        $students=student::all();
        view()->share('students', $students);
        $pdf = PDF::loadView('students.absence-pdf');
        return $pdf->download('student.pdf');
    }
  
}
