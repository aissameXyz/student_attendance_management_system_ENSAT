<?php

namespace App\Http\Controllers;

use App\Events\SeanceStartingEvent;
use Illuminate\Http\Request;
use App\Models\Student;

use App\Models\Absence;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AbsenceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher.absence');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {
        $absent=$request->input('absent');
         foreach($absent as $id){
                 $s=Student::find($id);
                 Absence::where('admissionNo',$s->admissionNumber)->update(['status' => "present"]);
             }
        return to_route('Teacher_dashboard');

    }


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
        //
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

    public function seanceSheet($id,$absences=[])
    {
        $seance_id = $id;
        return view('teacher.seance')->with('seance_id', $seance_id)->with('absences', $absences);

    }

    public function seanceStart($id)
    {
        $teacher=Auth::user()->teacher;
        $seance_id = $id;
        $students = $teacher->module->filiere->student;
        foreach($students as $student){
            $absence = new absence;
            $absence->admissionNo = $student->admissionNumber;
            $absence->status = "absent";
            $absence->seance = $seance_id;
            $absence->filiere_id=$teacher->module->filiere->id;
            $absence->module_id=$teacher->module->id;
            $absence->save();
        }
        event(new SeanceStartingEvent($teacher,$seance_id));

        //return view('teacher.seance')->with('seance_id', $seance_id)->with('absences',[]);
        return $this->seanceSheet($id);
    }

    public function seanceEnd($id)
    {
        $teacher=Auth::user()->teacher;
        DB::table('notifications')
            ->where('data->seance', $id)
            ->where('data->module', $teacher->module->id)
            ->delete();
        $absences = Absence::where('module_id',$teacher->module->id)->where('seance',$id)->get();
        return $this->seanceSheet($id,$absences);
    }

    public function markPresence(Request $request)
    {
        $s= auth()->user()->student;
        if(DB::table('notifications')
            ->where('data->seance', $request->input('seance_id'))
            ->where('data->module', $request->input('module_id'))
            ->where('notifiable_id',$s->id)
            ->doesntExist())
        {
            return back();
        }
        Absence::where('admissionNo',$s->admissionNumber)->where('seance',$request->input('seance_id'))
            ->where('module_id',$request->input('module_id'))->update(['status' => "present"]);
        return back();
    }

}
