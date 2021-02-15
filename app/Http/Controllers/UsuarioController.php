<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Silber\Bouncer\Database\Role;

class UsuarioController extends Controller
{
    public function index()
    {
        if (! Gate::allows('listar_usuario')) {
            return abort(401);
        }

        $usuarios = User::with('roles')->paginate(10);
        return view('usuario.inicio', compact('usuarios'));
    }

    public function create()
    {
        if (! Gate::allows('crear_usuario')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');
        //dd($roles);
        return view('usuario.crear', compact('roles'));

    }

    public function store(Request $request)
    {
        if (! Gate::allows('crear_usuario')) {
            return abort(401);
        }
        $user = User::create($request->all());

        foreach ($request->input('roles') as $role) {
            $user->assign($role);
        }

        return redirect('usuario');
    }

    public function edit($id)
    {
        /*if (! Gate::allows('editar_usuario')) {
            return abort(401);
        }*/
        $roles = Role::get()->pluck('name', 'name');

        $user = User::findOrFail($id);

        return view('usuario.editar', compact('user', 'roles'));
    }

    public function update(UpdateUsersRequest $request, $id)
    {
        if (! Gate::allows('editar_usuario')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        $user->update($request->all());
        foreach ($user->roles as $role) {
            $user->retract($role);
        }
        foreach ($request->input('roles') as $role) {
            $user->assign($role);
        }

        return redirect('admin/usuarios');
    }

    public function destroy($id)
    {
        if (! Gate::allows('eliminar_usuario')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('usuario');
    }

}
