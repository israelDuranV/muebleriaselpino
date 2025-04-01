<?php
namespace App\Http\Controllers\Admin;
use App\Models\Terminado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TerminadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.terminados.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.terminados.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
			'terminado' => 'required|unique:terminado'
		]);
		$terminado = Terminado::create($request->all());
		
		return redirect()->route('admin.terminados.edit', compact("terminado"))
			->with('info', 'El Terminado se creó con éxito');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terminado $terminado)
    {
		return view('admin.terminados.edit',  compact("terminado"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terminado $terminado)
    {
        $request->validate([
			'terminado' => 'required'
		]);
		$terminado->update($request->all());
		
		return redirect()->route('admin.terminados.edit',  compact("terminado"))
			->with('info', 'El Terminado se editó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terminado $terminado)
    {
        $terminado->delete();
        return redirect()->route('admin.terminados.index')->with('info', 'El Terminado se eliminó con éxito');
    }
}
