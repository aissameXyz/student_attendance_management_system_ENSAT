<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\filiere;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    public function absence()
    {
        $user=Auth::user();
        $data=DB::table('users')
            ->join('students','users.id','=','students.user_id')
            ->join('absences','absences.admissionNo','=','students.admissionNumber')
            ->join('modules','modules.id','=','absences.module_id')
            ->select('absences.*','modules.designation')
            ->where('users.id','=',$user->id)
            ->get();
        return view('student.absence',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filiere = filiere::all();
        return view('student.create')->with('filiere',$filiere);
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
            'lastName' => 'required',
            'firstName' => 'required',
            'code_ap' => 'required',
            'admissionNumber' => 'required',
            'filiere_Id' => 'required'
        ]);

        $student = new student;
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->code_ap = $request->input('code_ap');
        $student->admissionNumber = $request->input('admissionNumber');
        $student->filiere_Id = $request->input('filiere_Id');
        $user_id = user::where('name','=',$request->input('firstName'))->first()->id;
        $student->user_Id = $user_id;


        $student->save();

        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = filiere::all();
        $student = student::find($id);
        return view('student.edit',compact('student'))->with('filiere',$filiere);
    }
    // to_route('students.edit')->with('student', $student);
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'code_ap' => 'required',
            'admissionNumber' => 'required',
            'filiere_Id' => 'required'
        ]);

        // //create post
        $student = student::find($id);
        $student->firstName = $request->input('firstName');
        $student->lastName= $request->input('lastName');
        $student->code_ap = $request->input('code_ap');
        $student->admissionNumber = $request->input('admissionNumber');
        $student->filiere_Id = $request->input('filiere_Id');
        $student->save();

        return redirect()->back()->with('message', 'Student updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();

        return back()->with('message', 'Student deleted.');
    }

    public function myInfo(){

        $st = Student::where('user_id','like',Auth::User()->id)->first();
        return view('myInfo',compact('st'));

    }
}
