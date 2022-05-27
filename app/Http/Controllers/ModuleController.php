<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;


class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('Modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Modules.create');
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
            'Designation' => 'required',
            'filiere_id' => 'required'
        ]);

        //$id= Teacher::find($request->teacher_id)->id;
        $module = new Module;
        $module->Designation = $request->Designation;
        $module->filiere_id = $request->filiere_id;
        $module->save();
        return redirect()->route('Modules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::findOrFail($id);
        return view('Modules.show' , compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::findOrFail($id);
        return view('Modules.edit', compact('module'));
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
            'Designation' => 'required',
            'filiere_id' => 'required'
        ]);

        $module = Module::find($id);
        $module->Designation = $request->Designation;
        $module->filiere_id = $request->filiere_id;
        $module->save();

        return redirect()->route('Modules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Module::find($id)->delete();
        return redirect()
            ->route('Modules.index')
            ->with('success','Module suprimee');
    }
}
