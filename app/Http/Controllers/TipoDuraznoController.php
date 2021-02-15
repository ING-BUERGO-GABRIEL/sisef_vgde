<?php

namespace App\Http\Controllers;

use App\TipoDurazno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TipoDuraznoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipodurazno = TipoDurazno::where('estado',1)->paginate(3);
        return view('tipodurazno.inicio',["tipodurazno"=>$tipodurazno]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tipodurazno.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $tipodurazno = new TipoDurazno();
        $tipodurazno->nombre_comun = $request->nombre_comun;
        $tipodurazno->nombre_cientifico = $request->nombre_cientifico;
        $tipodurazno->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')){
            $tipodurazno->foto = Storage::url($request->file('imagen')->store('public/sisefvgde/imagenes'));
        }else{
            $tipodurazno->foto = "sin imagen";
        }
        $tipodurazno->save();
        return redirect('tipodurazno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoDurazno  $tipoDurazno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoDurazno  $tipoDurazno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoDurazno = TipoDurazno::find($id);
        return view('tipodurazno.editar',["tipodurazno"=>$tipoDurazno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoDurazno  $tipoDurazno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $tipodurazno = TipoDurazno::find($id);
        $tipodurazno->nombre_comun = $request->nombre_comun;
        $tipodurazno->nombre_cientifico = $request->nombre_cientifico;
        $tipodurazno->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')){
            $tipodurazno->foto = Storage::url($request->file('imagen')->store('public/sisefvgde/imagenes'));
        }else{
            $tipodurazno->foto = "sin imagen";
        }
        $tipodurazno->update();
        return redirect('tipodurazno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoDurazno  $tipoDurazno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipodurazno = TipoDurazno::find($id);
        $tipodurazno->estado=0;
        $tipodurazno->update();
        return redirect('tipodurazno');
    }
}
