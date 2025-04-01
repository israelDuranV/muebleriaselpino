<?php
namespace App\Http\Controllers\Admin;
use App\Models\Banco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.bancos.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.bancos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
			'banco' => 'required|unique:bancos'
		]);
		$banco = Banco::create($request->all());
		
		return redirect()->route('admin.bancos.edit', compact("banco"))
			->with('info', 'El banco se creó con éxito');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banco $banco)
    {
		return view('admin.bancos.edit',  compact("banco"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banco $banco)
    {
        $request->validate([
			'banco' => 'required'
		]);
		$banco->update($request->all());
		
		return redirect()->route('admin.bancos.edit',  compact("banco"))
			->with('info', 'El banco se editó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banco $banco)
    {
        $banco->delete();
        return redirect()->route('admin.bancos.index')->with('info', 'El banco se eliminó con éxito');
    }
}
