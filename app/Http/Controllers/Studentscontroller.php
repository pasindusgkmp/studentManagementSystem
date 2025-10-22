<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        $rules = [
            'firstname' => 'required|string|max:255',
            
        ];

        $validatedData = $request->validate($rules);
        
    //    if($validatedData->fails()){
    //         return redirect()->back()->withErrors($validatedData)->withInput();
    //     }


        $student = new Student();
        $student->first_name = $request->input('firstname');
        $student->last_name = $request->input('lastname');
        $student->contact_no = $request->input('contactno');
        $student->address = $request->input('address');
        $student->birthday = $request->input('birthday');
        $student->save();

        return 'success';
    }
}

