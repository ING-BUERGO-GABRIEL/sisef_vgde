<?php

namespace App\Http\Controllers;

use App\ProduccionCambiosClimaticos;
use App\Produccion;
use App\FenomenoClima;
use Illuminate\Http\Request;

class ProduccionCambiosClimaticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $produccioncambiosclimaticos= ProduccionCambiosClimaticos::join('fenomeno_climas','fenomeno_climas.id','=','produccion_cambios_climaticos.id_cambiosclimaticos')
        ->select('produccion_cambios_climaticos.id as idcam','fenomeno_climas.nombre as nomcli','produccion_cambios_climaticos.fecha as fecha')
        ->where ('produccion_cambios_climaticos.estado',1)
        ->get(); 
        return view('produccioncambiosclimaticos.inicio',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $produccioncambiosclimaticos =new ProduccionCambiosClimaticos();
        $produccioncambiosclimaticos->id_produccion = $request->id_produccion;
        $produccioncambiosclimaticos->id_cambiosclimaticos = $request->id_cambiosclimaticos;
        $produccioncambiosclimaticos->fecha = $request->fecha;
        $produccioncambiosclimaticos->save();
        return view('produccioncambiosclimaticos.inicio',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos])->with('idpro', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       $produccioncambiosclimaticos =new ProduccionCambiosClimaticos();
       $produccioncambiosclimaticos->id_produccion = $request->id_produccion;
       $produccioncambiosclimaticos->id_cambiosclimaticos = $request->id_cambiosclimaticos;
       $produccioncambiosclimaticos->fecha = $request->fecha;
       $produccioncambiosclimaticos->save();

       return redirect('produccioncambiosclimaticos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProduccionCambiosClimaticos  $produccionCambiosClimaticos
     * @return \Illuminate\Http\Response
     */
    public function show(ProduccionCambiosClimaticos $produccionCambiosClimaticos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProduccionCambiosClimaticos  $produccionCambiosClimaticos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produccioncambiosclimaticos = ProduccionCambiosClimaticos::find($id);
        $fenomenoclima = FenomenoClima::where('estado',1)->get();
        return view('produccioncambiosclimaticos.editar',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos,'fenomenoclima'=>$fenomenoclima]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProduccionCambiosClimaticos  $produccionCambiosClimaticos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {     
        $produccioncambiosclimaticos =new ProduccionCambiosClimaticos();
        $produccioncambiosclimaticos->id_produccion = $request->id_produccion;
        $produccioncambiosclimaticos->id_cambiosclimaticos = $request->id_cambiosclimaticos;
        $produccioncambiosclimaticos->fecha = $request->fecha;
        $produccioncambiosclimaticos->save();
        $produccioncambiosclimaticos= ProduccionCambiosClimaticos::join('fenomeno_climas','fenomeno_climas.id','=','produccion_cambios_climaticos.id_cambiosclimaticos')
        ->select('produccion_cambios_climaticos.id as idcam','fenomeno_climas.nombre as nomcli','produccion_cambios_climaticos.fecha as fecha')
        ->where ('produccion_cambios_climaticos.estado',1)
        ->where ('produccion_cambios_climaticos.id_produccion',$id)
        ->get(); 
        $produccion = Produccion::where('estado',1)->get();
        $fenomenoclima = FenomenoClima::where('estado',1)->get();
        return view('produccioncambiosclimaticos.inicio',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos,"produccion"=>$produccion,"fenomenoclima"=>$fenomenoclima])->with('idpro', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProduccionCambiosClimaticos  $produccionCambiosClimaticos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $produccioncambiosclimaticos = ProduccionCambiosClimaticos::find($request->id);
        $produccioncambiosclimaticos->estado=0;
        $produccioncambiosclimaticos->update();
        $produccioncambiosclimaticos= ProduccionCambiosClimaticos::join('fenomeno_climas','fenomeno_climas.id','=','produccion_cambios_climaticos.id_cambiosclimaticos')
        ->select('produccion_cambios_climaticos.id as idcam','fenomeno_climas.nombre as nomcli','produccion_cambios_climaticos.fecha as fecha')
        ->where ('produccion_cambios_climaticos.estado',1)
        ->where ('produccion_cambios_climaticos.id_produccion',$request->idpro)
        ->get(); 
        //$produccion = Produccion::where('estado',1)->get();
        $fenomenoclima = FenomenoClima::where('estado',1)->get();
        return view('produccioncambiosclimaticos.inicio',["produccioncambiosclimaticos"=>$produccioncambiosclimaticos,"fenomenoclima"=>$fenomenoclima])->with('idpro', $request->idpro);
    }
}
