<?php

namespace App\Http\Controllers;

use App\SisPrevencionClima;
use Illuminate\Http\Request;

class SisPrevencionClimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemaprevencion = SisPrevencionClima::where('estado',1)->paginate(2);
        return view('sistemaprevencion.inicio',["sistemaprevencion"=>$sistemaprevencion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistemaprevencion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sistemaprevencion = new SisPrevencionClima();
        $sistemaprevencion->nombre = $request->nombre;
        $sistemaprevencion->descripcion = $request->descripcion;
        $sistemaprevencion->save();
        return redirect('sistemaprevencion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SisPrevencionClima  $sisPrevencionClima
     * @return \Illuminate\Http\Response
     */
    public function show(SisPrevencionClima $sisPrevencionClima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SisPrevencionClima  $sisPrevencionClima
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sistemaprevencion = SisPrevencionClima::find($id);
        return view('sistemaprevencion.editar',["sistemaprevencion"=>$sistemaprevencion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SisPrevencionClima  $sisPrevencionClima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sistemaprevencion = SisPrevencionClima::find($id);
        $sistemaprevencion->nombre = $request->nombre;
        $sistemaprevencion->descripcion = $request->descripcion;
        $sistemaprevencion->update();
        return redirect('sistemaprevencion');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SisPrevencionClima  $sisPrevencionClima
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sistemaprevencion = SisPrevencionClima::find($id);
        $sistemaprevencion->estado = 0;
        $sistemaprevencion->update();
        return redirect('sistemaprevencion');
    }
}
