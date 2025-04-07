<?php

namespace App\Http\Controllers\Admin;

use App\Models\Materiale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.materiales.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.materiales.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
			'material' => 'required|unique:materiales'
		]);
		$materiale = Materiale::create($request->all());
		
		return redirect()->route('admin.materiales.edit', compact("materiale"))
			->with('info', 'El materiale se creó con éxito');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materiale $materiale)
    {
		return view('admin.materiales.edit',  compact("materiale"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materiale $materiale)
    {
        $request->validate([
			'material' => 'required'
		]);
		$materiale->update($request->all());
		
		return redirect()->route('admin.materiales.edit',  compact("materiale"))
			->with('info', 'El material se editó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materiale $materiale)
    {
        $materiale->delete();
        return redirect()->route('admin.materiales.index')->with('info', 'El material se eliminó con éxito');
    }
}
