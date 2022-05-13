<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;


class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = module::all();
        return view('module.index')->with('module', $module);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.create');
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
            'description' => 'required',
            'filiere' => 'required',
            'year' => 'required'    
        ]);

        // //create post
        $module = new module;
        $module->description = $request->input('description');
        $module->filiere = $request->input('filiere');
        $module->year = $request->input('year');
        $module->save();

        return to_route('admin.modules.index')->with('message', 'Module created.');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = module::find($id);
        return view('module.show')->with('module', $module);
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
        $module = module::find($id);
        $module->delete();

        return back()->with('message', 'Module deleted.');
    }
}
