<?php

namespace App\Http\Controllers;

use App\Encuestador;
use App\FenomenoClima;
use App\Plantacion;
use App\Produccion;
use App\ProduccionCambiosClimaticos;
use App\TipoDurazno;
use Illuminate\Http\Request;
use DB;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produccion = Produccion::
        join('tipo_duraznos','tipo_duraznos.id','=','produccions.id_tipo_durazno')
        ->join('encuestadors','encuestadors.id','=','produccions.id_encuestador')
        ->select('produccions.id as idpro','tipo_duraznos.nombre_comun as nomtip',
        'encuestadors.nombre as nomen','produccions.cantidadcajas as catidad',
        'produccions.preciocaja_bs as precio','produccions.fechaproduccion as fecha')
        ->where('produccions.estado',1)
        ->paginate(5);
        return view( 'produccion.inicio', ["produccion"=>$produccion]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plantacion= Plantacion::join('productors','productors.id','=','plantacions.id_productor')
        ->join('lugar_plantacions','lugar_plantacions.id','=','plantacions.id_lugar')
        ->select('plantacions.id as idpla','productors.nombre as nompro','productors.apellidos as ape','lugar_plantacions.municipio as municipio')
        ->where ('plantacions.estado',1)
        ->get();
        $tipodurazno = TipoDurazno::where ('estado',1)->get();
        $encuestador= Encuestador::where('estado',1)->get();
        return view('produccion.crear', ["plantacion"=>$plantacion,"encuestador"=>$encuestador,"tipodurazno"=>$tipodurazno]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);
         $produccion = new Produccion();
         $produccion->id_plantacion = $request->id_plantacion;
         $produccion->id_tipo_durazno = $request->id_tipo_durazno;
         $produccion->id_usuario = $request->id_usuario;
         $produccion->id_encuestador = $request->id_encuestador;
         $produccion->preciocaja_bs = $request->preciocaja_bs;
         $produccion->fechaproduccion = $request->fechaproduccion;
         $produccion->cantidadcajas = $request->cantidadcajas;
         $produccion->costoproduccion = $request->costoproduccion;
         $produccion->diametropromedio = $request->diametropromedio;
         $produccion->save();
         $idpro = $produccion->id;
         $produccioncambiosclimaticos= ProduccionCambiosClimaticos::join('fenomeno_climas','fenomeno_climas.id','=','produccion_cambios_climaticos.id_cambiosclimaticos')
         ->select('produccion_cambios_climaticos.id as idcam','fenomeno_climas.nombre as nomcli','produccion_cambios_climaticos.fecha as fecha')
         ->where ('produccion_cambios_climaticos.estado',1)
         ->where ('produccion_cambios_climaticos.id_produccion', $idpro)
         ->get(); 
         $fenomenoclima = FenomenoClima::where('estado',1)->get();
         return view('produccioncambiosclimaticos.inicio',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos,"fenomenoclima"=>$fenomenoclima])->with('idpro', $idpro);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function show(Produccion $produccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $plantacion= Plantacion::join('productors','productors.id','=','plantacions.id_productor')
        ->join('lugar_plantacions','lugar_plantacions.id','=','plantacions.id_lugar')
        ->select('plantacions.id as idpla','productors.nombre as nompro','productors.apellidos as ape','lugar_plantacions.municipio as municipio')
        ->where ('plantacions.estado',1)
        ->get();        
        $tipodurazno = TipoDurazno::where ('estado',1)->get();
        $encuestador= Encuestador::where('estado',1)->get();

        $produccion = Produccion::find($id);
        return view ('produccion.editar', ["produccion"=>$produccion,"plantacion"=>$plantacion,"encuestador"=>$encuestador,"tipodurazno"=>$tipodurazno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
       $produccion = Produccion::find($id);
       $produccion->id_plantacion = $request->id_plantacion;
       $produccion->id_tipo_durazno = $request->id_tipo_durazno;
       $produccion->id_usuario = $request->id_usuario;
       $produccion->id_encuestador = $request->id_encuestador;
       $produccion->preciocaja_bs = $request->preciocaja_bs;
       $produccion->fechaproduccion = $request->fechaproduccion;
       $produccion->cantidadcajas = $request->cantidadcajas;
       $produccion->costoproduccion = $request->costoproduccion;
       $produccion->diametropromedio = $request->diametropromedio;
       $produccion->update();

       $produccioncambiosclimaticos= ProduccionCambiosClimaticos::join('fenomeno_climas','fenomeno_climas.id','=','produccion_cambios_climaticos.id_cambiosclimaticos')
       ->select('produccion_cambios_climaticos.id as idcam','fenomeno_climas.nombre as nomcli','produccion_cambios_climaticos.fecha as fecha')
       ->where ('produccion_cambios_climaticos.estado',1)
       ->where ('produccion_cambios_climaticos.id_produccion', $id)
       ->get(); 
       $fenomenoclima = FenomenoClima::where('estado',1)->get();
       return view('produccioncambiosclimaticos.inicio',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos,"fenomenoclima"=>$fenomenoclima])->with('idpro', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produccion = Produccion::find($id);
        $produccion->estado=0;
        $produccion->update();
        return redirect('produccion');;
    }
}
