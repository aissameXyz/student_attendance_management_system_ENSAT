<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Module;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher=teacher::all();
        return view('teacher\index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module=Module::all();
        return view('teacher\create',compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resp = new teacher;
        $resp->firstName =$request->firstName;
        $resp->lastName =$request->lastName;
        $user_id = user::where('name','=',$request->input('firstName'))->first()->id;
        $resp->user_id =$user_id;
        //$resp->user_id =$request->user_id;
        $resp->module_id =$request->module_id;
        $resp->save();
        return redirect()->back()->with('status','responsable added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = teacher::findorfail($id);
        $module=Module::all();


        return view('teacher\edit' , compact('teacher','module'));
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
        $resp = teacher::findorfail($id);
        $resp->firstName =$request->firstName;
        $resp->lastName =$request->lastName;
        $resp->user_id =$request->user_id;
        $resp->update();
        return redirect()->back()->with('status','responsable updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resp = teacher::findorfail($id);
        $resp->delete();
        return redirect()->back()->with('status','responsable deleted successfully');
    }
}
