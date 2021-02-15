<?php

namespace App\Http\Controllers;

use App\DestinoProduccion;
use Illuminate\Http\Request;

class DestinoProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinoproduccion = Destinoproduccion::where('estado',1)->paginate(10);
        return view( 'destinoproduccion.inicio', ["destinoproduccion"=>$destinoproduccion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinoproduccion.crear');
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
        $destinoproduccion = new Destinoproduccion();
        $destinoproduccion->detalle = $request->detalle;
        $destinoproduccion->destino = $request->destino;
        $destinoproduccion->save();
        return redirect('destinoproduccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DestinoProduccion  $destinoProduccion
     * @return \Illuminate\Http\Response
     */
    public function show(DestinoProduccion $destinoProduccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DestinoProduccion  $destinoProduccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destinoproduccion = Destinoproduccion::find($id);
        return view ('destinoproduccion.editar', ["destinoproduccion"=>$destinoproduccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DestinoProduccion  $destinoProduccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /// dd($request);
       $destinoproduccion = Destinoproduccion::find($id);
       $destinoproduccion->detalle = $request->detalle;
       $destinoproduccion->destino = $request->destino;
       $destinoproduccion->update();
       return redirect('destinoproduccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DestinoProduccion  $destinoProduccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinoproduccion = Destinoproduccion::find($id);
        $destinoproduccion->estado=0;
        $destinoproduccion->update();
        return redirect('destinoproduccion');;
    }
}
