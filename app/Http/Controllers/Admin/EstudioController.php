<?php

namespace App\Http\Controllers\Admin;
use App\Models\Estudio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.estudios.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.estudios.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'required|unique:estudios'
		]);
		$estudio = Estudio::create($request->all());
		
		return redirect()->route('admin.estudios.edit', compact("estudio"))
			->with('info', 'El Estudio se creó con éxito');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudio $estudio)
    {
		return view('admin.estudios.edit',  compact("estudio"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudio $estudio)
    {
        $request->validate([
			'name' => 'required'
		]);
		$estudio->update($request->all());
		
		return redirect()->route('admin.estudios.edit',  compact("estudio"))
			->with('info', 'El Estudio se editó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudio $estudio)
    {
        $estudio->delete();
        return redirect()->route('admin.estudios.index')->with('info', 'El Estudio se eliminó con éxito');
    }
}
