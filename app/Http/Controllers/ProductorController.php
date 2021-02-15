<?php

namespace App\Http\Controllers;

use App\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productor = Productor::where('estado',1)->paginate(6); 
        return view( 'productor.inicio', ["productor"=>$productor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productor.crear');
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
        $productor = new Productor();
        $productor->nombre = $request->nombre;
        $productor->apellidos = $request->apellidos;
        $productor->fechaNacimiento = $request->fechaNacimiento;
        $productor->nacionalidad = $request->nacionalidad;
        $productor->direccion = $request->direccion;
        $productor->celular = $request->celular;
        $productor->save();
        return redirect('productor');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function show(Productor $productor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productor = Productor::find($id);
        return view ('productor.editar', ["productor"=>$productor]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request);
       $productor = Productor::find($id);
       $productor->nombre = $request->nombre;
       $productor->apellidos = $request->apellidos;
       $productor->fechaNacimiento = $request->fechaNacimiento;
       $productor->nacionalidad = $request->nacionalidad;
       $productor->direccion = $request->direccion;
       $productor->celular = $request->celular;
       $productor->update();
       return redirect('productor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productor  $productor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productor = Productor::find($id);
        $productor->estado=0;
        $productor->update();
        return redirect('productor');;
    }
}

