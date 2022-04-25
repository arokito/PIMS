<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Permission as ContractsPermission;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index(){
        $permissions =Permission::all();
        return view('admin.permissions.index',compact('permissions'));
    }

    public function create(){
        return view('admin.permissions.create');
    }
    public function store(Request $request){

        $validate = $request->validate([
            'name'=>'required',
        ]);
        Permission::create($validate);
        return to_route('admin.permissions.index')->with('message','permission created');
    }

    public function edit(Permission $permission){
        $roles = Role::all();
        return view('admin.permissions.edit',compact('permission','roles'));
    }

    public function update(Request $request, Permission $permission){

        $validate = $request->validate([
            'name'=>'required',
        ]);
        $permission->update($validate);

        return to_route('admin.permissions.index')->with('message','permission updated');
    }



    public function destroy(Permission $permission){

        $permission->delete();
        return back()->with('message','permission removed');
    }

    public function assignRole(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $permission->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(Permission $permission, Role $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }
}
