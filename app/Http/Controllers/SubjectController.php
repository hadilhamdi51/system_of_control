<?php

namespace App\Http\Controllers;
use App\Models\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
       $subjects=(Auth::user()->subject);
       return view('subject.index',compact('subjects'));
    }
    public function sub()
    {
       $subjects= subject::all();
       return view('subject.sub',compact('subjects'));
    }
}
