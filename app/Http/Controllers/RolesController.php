<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Silber\Bouncer\Database\Ability;
use Silber\Bouncer\Database\Role;

class RolesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('listar_rol')) {
            return abort(401);
        }
        $roles = Role::paginate(5);
        return view('rol.inicio', compact('roles'));
    }

    public function create()
    {
        if (! Gate::allows('crear_rol')) {
            return abort(401);
        }
        $abilities = Ability::get()->pluck('name', 'name');

        return view('rol.crear', compact('abilities'));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('crear_rol')) {
            return abort(401);
        }
        $role = new  Role;
        $role->name = $request->nombre;
        $role->title = $request->descripcion;
        $role->save();
        $role->allow($request->input('abilities'));

        return redirect('roles');
    }

    public function editar(Request $request)
    {
        if (! Gate::allows('editar_rol')) {
            return abort(401);
        }
        $abilities = Ability::get()->pluck('name', 'name');
        $role = Role::findOrFail($request->rol_id);

        return view('rol.editar', compact('role', 'abilities'));
    }

    public function update(Request $request)
    {
       /* if (! Gate::allows('editar_rol')) {
            return abort(401);
        }*/

        $role = Role::findOrFail($request->rol_id);
        $role->name = $request->nombre;
        $role->title = $request->descripcion;
        $role->save();

        foreach ($role->getAbilities() as $ability) {
            $role->disallow($ability->name);
        }

        $role->allow($request->input('abilities'));
        return redirect('roles');
    }

    public function destroy($id)
    {
        if (! Gate::allows('eliminar_rol')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect('roles');
    }
}
