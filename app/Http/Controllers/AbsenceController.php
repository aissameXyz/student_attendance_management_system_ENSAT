<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use App\Models\Absence;


class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.absence');
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

        // $student = student::all();
        // $count = count($student);

        // $input = $request->all();





        foreach($request as $rs){
        $absence = new absence;
        $absence->prenom = $rs->get('prenom');
        $absence->code = $rs->get('code');
        $absence->nom = $rs->get('nom');



        // $absence->etat = "present";




        if( $rs->has('absent') != null ){
                   $absence->etat = "absent";
                 }
             else{
                 $absence->etat = "présent";
             }






        // foreach ($input as $cond) {
        //     $absence = new absence;
        //     $absence->prenom = $request->get('prenom');
        // $absence->nom = $request->get('nom');
        
        // $absence->code = $request->get('code');
        //     if( $request->check != null ){
        //         $absence->etat = "absent";
        //     }
        // else{
        //     $absence->etat = "présent";
        // }
        
        
        // }



        
        $absence->save();
        }


//          $prenom = $request->get('prenom');
//          $code = $request->get('code');
//          $nom = $request->get('nom');
//          $etat = $request->absent;

// for($i=0;$i<6;$i++){
//          $data = [

//             'prenom' => $prenom[$i],
//             'nom' => $nom[$i],
//             'code' => $code[$i],
//             'etat' => $etat[$i]


//          ];
//         }
//          DB::table('absences')->insert($data);

        return to_route('admin.absence.index');
        
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

    public function seance()
    {
        $student = student::all();
        
        return view('admin.seance')->with('student', $student);
    }
}
