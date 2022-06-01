<?php

namespace App\Http\Controllers;
use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
       $subjects=subject::all();
       return view('subject.index',compact('subjects'));
    }
}
