<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Symfony\Contracts\Service\Attribute\Required;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=> 'required',
            'permissions'=> 'required'
        ]);

        $role = Role::create([
            'name'=> $request->name
        ]);

        $role->permissions()->attach($request->permissions);

        return Redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions=Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([

            'name'=> 'required',
            'permissions'=> 'required'
        ]);
        $role->update([
            'name'=>$request->name
        ]);

        $role->permissions()->sync($request->permissions);
        return Redirect()->route('admin.roles.edit', $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return Redirect()->route('admin.roles.index')->with('info', 'El rol se elimino correctamente');
    }
}
