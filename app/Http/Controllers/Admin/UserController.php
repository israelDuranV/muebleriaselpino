<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
/*    public function __construct(){
        $this->middleware('can:admin.users.index')->only("index");
        $this->middleware('can:admin.users.edit')->only("edit","update");
    }
*/
    public function index()
    {
        return view("admin.users.index");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view("admin.users.edit", compact("user","roles"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->rles);
        return redirect()->route('admin.users.edit',$user)
        ->with('info', 'Se asignó los roles correctamente');
    }

    /*
     * Remove the specified resource from storage.
    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')
			->with('info', 'El usuario se eliminó con éxito');
    }
            */
}
