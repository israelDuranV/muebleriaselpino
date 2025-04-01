<?php
namespace App\Http\Controllers\Admin;
use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.departamentos.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.departamentos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
			'departamento' => 'required|unique:departamento'
		]);
		$departamento = Departamento::create($request->all());
		
		return redirect()->route('admin.departamentos.edit', compact("departamento"))
			->with('info', 'El Departamento se creó con éxito');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
		return view('admin.departamentos.edit',  compact("departamento"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
			'Departamento' => 'required'
		]);
		$departamento->update($request->all());
		
		return redirect()->route('admin.departamentos.edit',  compact("departamento"))
			->with('info', 'El Departamento se editó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('admin.departamentos.index')->with('info', 'El Departamento se eliminó con éxito');
    }
}
