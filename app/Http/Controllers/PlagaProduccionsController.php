<?php

namespace App\Http\Controllers;

use App\PlagaProduccions;
use App\Plaga;
use App\Produccion;
use Illuminate\Http\Request;

class PlagaProduccionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {       
        $plagaproduccion= PlagaProduccions::join('plagas','plagas.id','=','plaga_produccions.id_plaga')
        ->select('plaga_produccions.id as idplagap','plagas.nombre as nompla','plaga_produccions.superficieafectada_ha as superficie','plaga_produccions.fecha as fecha')
        ->where ('plaga_produccions.estado',1)
        ->where ('plaga_produccions.id_produccion',$id)
        ->get();
        $plaga = Plaga::where ('estado',1)->get();
        return view( 'plagaproduccions.inicio', ["plagaproduccions"=>$plagaproduccion,"plaga"=>$plaga])->with('idpro', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plaga = Plaga::where ('estado',1)->get();
        return view('plagaproduccions.crear',["plaga"=>$plaga]);
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
       $plagaproduccion = new PlagaProduccions();
       $plagaproduccion->id_plaga = $request->id_plaga;
       $plagaproduccion->id_produccion = $request->id_produccion;
       $plagaproduccion->obserbaciones = $request->obserbaciones;
       $plagaproduccion->superficieafectada_ha = $request->superficieafectada_ha;
       $plagaproduccion->fecha = $request->fecha;
       $plagaproduccion->save();
       return redirect('plagaproduccions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlagaProduccions  $plagaProduccions
     * @return \Illuminate\Http\Response
     */
    public function show(PlagaProduccions $plagaProduccions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlagaProduccions  $plagaProduccions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plagaproduccion = PlagaProduccions::find($id);
        $plaga = Plaga::where('estado',1)->get();
        $produccion = Produccion::where('estado',1)->get();
        return view ('plagaproduccions.editar', ["plagaproduccions"=>$plagaproduccion,"plaga"=>$plaga,"produccion"=>$produccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlagaProduccions  $plagaProduccions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request);
       $plagaproduccion = new PlagaProduccions;
       $plagaproduccion->id_plaga = $request->id_plaga;
       $plagaproduccion->id_produccion = $request->id_produccion;
       $plagaproduccion->obserbaciones = $request->obserbaciones;
       $plagaproduccion->superficieafectada_ha = $request->superficieafectada_ha;
       $plagaproduccion->fecha = $request->fecha;
       $plagaproduccion->save();

       $plagaproduccion= PlagaProduccions::join('plagas','plagas.id','=','plaga_produccions.id_plaga')
       ->select('plaga_produccions.id as idplagap','plagas.nombre as nompla','plaga_produccions.superficieafectada_ha as superficie','plaga_produccions.fecha as fecha')
       ->where ('plaga_produccions.estado',1)
       ->where ('plaga_produccions.id_produccion',$id)
       ->get();
       $plaga = Plaga::where ('estado',1)->get();
       return view( 'plagaproduccions.inicio', ["plagaproduccions"=>$plagaproduccion,"plaga"=>$plaga])->with('idpro', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlagaProduccions  $plagaProduccions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $plagaproduccion = PlagaProduccions::find($request->id);
        $plagaproduccion->estado=0;
        $plagaproduccion->update();

        $plagaproduccion= PlagaProduccions::join('plagas','plagas.id','=','plaga_produccions.id_plaga')
        ->select('plaga_produccions.id as idplagap','plagas.nombre as nompla','plaga_produccions.superficieafectada_ha as superficie','plaga_produccions.fecha as fecha')
        ->where ('plaga_produccions.estado',1)
        ->where ('plaga_produccions.id_produccion',$request->idpro)
        ->get();
        $plaga = Plaga::where ('estado',1)->get();
        return view( 'plagaproduccions.inicio', ["plagaproduccions"=>$plagaproduccion,"plaga"=>$plaga])->with('idpro', $request->idpro);
    }
}
