<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student::all();
        return view('student.index')->with('student', $student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'filiere' => 'required',
            'email' => 'required'
        ]);

        // //create post
        $student = new student;
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->filiere = $request->input('filiere');
        $student->email = $request->input('email');
        $student->save();

        return to_route('admin.students.index')->with('message', 'Student created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
        return view('admin.students.index')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        return to_route('admin.students.edit')->with('student', $student);
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
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'filiere' => 'required',
            'email' => 'required'
        ]);

        // //create post
        $student = student::find($id);
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->filiere = $request->input('filiere');
        $student->email = $request->input('email');
        $student->save();

        return to_route('admin.students.index')->with('message', 'Student updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();

        return back()->with('message', 'Student deleted.');
    }

    

    
}
