<?php

namespace App\Http\Controllers;

use App\Encuestador;
use Illuminate\Http\Request;

class EncuestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestador= Encuestador::where('estado',1)->paginate(5);
        return view('encuestador.inicio',["encuestador"=>$encuestador]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encuestador.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
       $encuestador =new Encuestador();
       $encuestador->nombre = $request->nombre;
       $encuestador->apellidos = $request->apellidos;
       $encuestador->direccion = $request->direccion;
       $encuestador->profesion = $request->profesion;
       $encuestador->telefono = $request->telefono;
       $encuestador->save();
       return redirect('encuestador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuestador  $encuestador
     * @return \Illuminate\Http\Response
     */
    public function show(Encuestador $encuestador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuestador  $encuestador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encuestador = Encuestador::find($id);
        return view('encuestador.editar',["encuestador"=>$encuestador]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuestador  $encuestador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $encuestador = Encuestador::find($id);
        $encuestador->nombre = $request->nombre;
        $encuestador->apellidos = $request->apellidos;
        $encuestador->direccion = $request->direccion;
        $encuestador->profesion = $request->profesion;
        $encuestador->telefono = $request->telefono;
        $encuestador->update();
        return redirect('encuestador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuestador  $encuestador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encuestador = Encuestador::find($id);
        $encuestador->estado=0;
        $encuestador->update();
        return redirect('encuestador');
    }
}
