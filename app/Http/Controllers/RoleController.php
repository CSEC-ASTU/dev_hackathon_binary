<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function home()
    {
        $allroles = Role::all();

        return view('roles.home')->with('allroles', $allroles);
    }

    public function add(Request $request)
    {
        return view('roles.store');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);

        $role = new Role([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'permissions' => serialize($request->get('permissions')),
        ]);

        $role->save();

        return redirect('/roles')->with('success', 'Role has been added');
    }

    public function show($id)
    {
        $role = Role::find($id);
        if($role->permissions){
            $permissions = unserialize($role->permissions);
        }else{
            $permissions = [];
        }

        return view('roles.show')
        ->with('role', $role)
        ->with('permissions', $permissions)
        ->with('user_count', $role->users()->count());
    }
}
