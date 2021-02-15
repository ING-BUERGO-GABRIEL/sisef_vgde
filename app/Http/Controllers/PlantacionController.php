<?php

namespace App\Http\Controllers;

use App\LugarPlantacion;
use App\Plantacion;
use App\Proveedor;
use App\FenomenoClima;
use App\Productor;
use Illuminate\Http\Request;

class PlantacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantacion= Plantacion::join('productors','productors.id','=','plantacions.id_productor')
        ->select('plantacions.id as idpla','productors.nombre as nompro','plantacions.tiporiego as rie','plantacions.tipoabono as abo','plantacions.cantidadplantine_ha as cant','plantacions.extencion_ha as ext','plantacions.fechaplantacion as fech')
        ->where ('plantacions.estado',1)
        ->paginate(3);
        return view('plantacion.inicio',['plantacion'=>$plantacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //nuevo
        $lugarplantacion = LugarPlantacion::where('estado',1)->get();
        $proveedor = Proveedor::where('estado',1)->get();
        $fenomenoclima = FenomenoClima::where('estado',1)->get();
        $productor = Productor::where('estado',1)->get();
        return view('plantacion.crear',["lugarplantacion"=>$lugarplantacion,"proveedor"=>$proveedor,"fenomenoclima"=>$fenomenoclima,"productor"=>$productor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plantacion = new Plantacion();
        $plantacion->id_lugar = $request->id_lugar;
        $plantacion->id_proveedor = $request->id_proveedor;
        $plantacion->id_sis_prevencion = $request->id_sis_prevencion;
        $plantacion->id_productor = $request->id_productor;
        $plantacion->tiporiego = $request->tiporiego;
        $plantacion->tipoabono = $request->tipoabono;
        $plantacion->cantidadplantine_ha = $request->cantidadplantine_ha;
        $plantacion->extencion_ha = $request->extencion_ha;
        $plantacion->fechaplantacion = $request->fechaplantacion;

        $plantacion->save();
        return redirect('plantacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function show(Plantacion $plantacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plantacion = Plantacion::find($id);
        $lugarplantacion = LugarPlantacion::where('estado',1)->get();
        $proveedor = Proveedor::where('estado',1)->get();
        $fenomenoclima = FenomenoClima::where('estado',1)->get();
        $productor = Productor::where('estado',1)->get();
        return view('plantacion.editar',["plantacion"=>$plantacion ,"lugarplantacion"=>$lugarplantacion,"proveedor"=>$proveedor,"fenomenoclima"=>$fenomenoclima,"productor"=>$productor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plantacion = Plantacion::find($id);
        $plantacion->id_lugar = $request->id_lugar;
        $plantacion->id_proveedor = $request->id_proveedor;
        $plantacion->id_sis_prevencion = $request->id_sis_prevencion;
        $plantacion->id_productor = $request->id_productor;
        $plantacion->tiporiego = $request->tiporiego;
        $plantacion->tipoabono = $request->tipoabono;
        $plantacion->cantidadplantine_ha = $request->cantidadplantine_ha;
        $plantacion->extencion_ha = $request->extencion_ha;
        $plantacion->fechaplantacion = $request->fechaplantacion;

        $plantacion->update();
        return redirect('plantacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantacion  $plantacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plantacion = Plantacion::find($id);
        $plantacion->estado=0;

        $plantacion->update();
        return redirect('plantacion');
    }
}
