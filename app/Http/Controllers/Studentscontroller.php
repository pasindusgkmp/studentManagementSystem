<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentscontroller extends Controller
{
    public function index()
    {
        
        return view('students.index');
    }
    public function create()
    {
        
        return view('students.create');
    }
    public function store(Request $request)
    {
        
        return $request;
    }
}

