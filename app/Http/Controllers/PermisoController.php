<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Silber\Bouncer\Database\Ability;

class PermisoController extends Controller
{
    public function index()
    {
        if (! Gate::allows('listar_permiso')) {
            return abort(401);
        }

        $permisos = Ability::all();

        return view('permisos.inicio', compact('permisos'));
    }


    public function create()
    {
        if (! Gate::allows('crear_permiso')) {
            return abort(401);
        }
        return view('administracion.permisos.create');
    }


    public function store(Request $request)
    {
        if (! Gate::allows('crear_permiso')) {
            return abort(401);
        }
        $permisos  = new Ability;
        $permisos->name = $request->nombre;
        $permisos->title = $request->descripcion;
        $permisos->save();
        return redirect('permisos');
    }

    public function edit(Request $request)
    {
        if (! Gate::allows('editar_permiso')) {
            return abort(401);
        }
        $permiso = Ability::findOrFail($request->permiso_id);
        return view('administracion.permisos.edit', compact('permiso'));
    }

    public function update(Request $request)
    {
        if (! Gate::allows('editar_permiso')) {
            return abort(401);
        }
        $permiso = Ability::findOrFail($request->permiso_id);
        $permiso->name = $request->nombre;
        $permiso->update();

        return redirect('permisos');
    }

    public function destroy($id)
    {
        if (! Gate::allows('eliminar_permiso')) {
            return abort(401);
        }
        $permiso = Ability::findOrFail($id);
        $permiso->delete();

        return redirect('permisos');
    }

}
