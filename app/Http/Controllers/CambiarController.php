<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CambiarController extends Controller
{
    public function index()
    {
        return view('cambiarcontra.inicio');
    }
    public function cambiar(Request $request)
    {
        $usuario = Auth::user();
        $usuario->password = Hash::make($request->contrasena);
        $usuario->update();
        return back();
    }
}
