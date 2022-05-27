<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Teacher;
use Illuminate\Http\Request;


class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('Filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Designation' => 'required'
        ]);

        // $id= Teacher::find($request->teacher_id)->id;
        $filiere = new Filiere;
        $filiere->Designation = $request->Designation;
        // $filiere->teacher_id = $id;
        $filiere->save();
        return redirect()->route('Filieres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('Filieres.show' , compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('Filieres.edit', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Designation' => 'required'
     
        ]);

        $filiere = Filiere::find($id);
        $filiere->Designation = $request->Designation;
        // $filiere->teacher_id = $request->teacher_id;

        $filiere->save();

        return redirect()->route('Filieres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Filiere::find($id)->delete();
        return redirect()
        ->route('Filieres.index')
        ->with('success','Filiere suprimee');
    }
}
