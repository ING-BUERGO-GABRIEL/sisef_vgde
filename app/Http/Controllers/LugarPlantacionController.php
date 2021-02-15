<?php

namespace App\Http\Controllers;

use App\LugarPlantacion;
use Illuminate\Http\Request;

class LugarPlantacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugarplantacion = LugarPlantacion::where('estado',1)->paginate(3);
        return view('lugarplantacion.inicio',['lugarplantacion'=>$lugarplantacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugarplantacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lugarplantacion = new LugarPlantacion();
        $lugarplantacion->municipio = $request->municipio;
        $lugarplantacion->zona = $request->zona;
        $lugarplantacion->latitud = $request->latitud;
        $lugarplantacion->longitud = $request->longitud;

        $lugarplantacion->save();
        return redirect('lugarplantacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LugarPlantacion  $lugarPlantacion
     * @return \Illuminate\Http\Response
     */
    public function show(LugarPlantacion $lugarPlantacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LugarPlantacion  $lugarPlantacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugarplantacion = LugarPlantacion::find($id);
        return view('lugarplantacion.editar',["lugarplantacion"=>$lugarplantacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LugarPlantacion  $lugarPlantacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lugarplantacion = LugarPlantacion::find($id);
        $lugarplantacion->municipio = $request->municipio;
        $lugarplantacion->zona = $request->zona;
        $lugarplantacion->latitud = $request->latitud;
        $lugarplantacion->longitud = $request->longitud;

        $lugarplantacion->update();
        return redirect('lugarplantacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LugarPlantacion  $lugarPlantacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugarplantacion = LugarPlantacion::find($id);
        $lugarplantacion->estado=0;

        $lugarplantacion->update();
        return redirect('lugarplantacion');
    }
}
