<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class Studentscontroller extends Controller
{
    public function index()
    {
        $students = Student::all();
        // return view('students.index'), compact('students');
        return view('students.index', compact('students'));
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
        
       if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }


        $student = new Student();
        $student->first_name = $request->input('firstname');
        $student->last_name = $request->input('lastname');
        $student->contact_no = $request->input('contactno');
        $student->address = $request->input('address');
        $student->birthday = $request->input('birthday');
        $student->save();

        return 'success';
    }

    public function edit($id)
    {
      $student = Student::where('id', $id)->first();
    return view('students.edit', compact('student'));
    }

    public function update(Request $request, $student_id)
    {
         $rules = [
            'firstname' => 'required|string|max:255',
            
        ];

        $validatedData = $request->validate($rules);
        
       if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $student = Student::where('id', $student_id)->first();
        $student->first_name = $request->input('firstname');
        $student->last_name = $request->input('lastname');    
        $student->contact_no = $request->input('contactno');
        $student->address = $request->input('address');
        $student->birthday = $request->input('birthday');
        $student->save();

        return redirect()->route('students.index');
    }
}

