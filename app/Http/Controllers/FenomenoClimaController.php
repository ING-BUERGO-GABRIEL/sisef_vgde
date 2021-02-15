<?php

namespace App\Http\Controllers;

use App\FenomenoClima;
use Illuminate\Http\Request;

class FenomenoClimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fenomenoclima = FenomenoClima::where('estado',1)->paginate(10);
        return view('fenomenoclima.inicio',['fenomenoclima'=>$fenomenoclima]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fenomenoclima.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fenomenoclima = new FenomenoClima();
        $fenomenoclima->nombre = $request->nombre;
        $fenomenoclima->descripcion = $request->descripcion;

        $fenomenoclima->save();
        return redirect('fenomenoclima');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FenomenoClima  $fenomenoClima
     * @return \Illuminate\Http\Response
     */
    public function show(FenomenoClima $fenomenoClima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FenomenoClima  $fenomenoClima
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fenomenoclima = FenomenoClima::find($id);
        return view('fenomenoclima.editar',["fenomenoclima"=>$fenomenoclima]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FenomenoClima  $fenomenoClima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fenomenoclima = FenomenoClima::find($id);
        $fenomenoclima->nombre = $request->nombre;
        $fenomenoclima->descripcion = $request->descripcion;

        $fenomenoclima->update();
        return redirect('fenomenoclima');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FenomenoClima  $fenomenoClima
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fenomenoclima = FenomenoClima::find($id);
        $fenomenoclima->estado=0;

        $fenomenoclima->update();
        return redirect('fenomenoclima');
    }
}
