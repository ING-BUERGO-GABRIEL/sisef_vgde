<?php

namespace App\Http\Controllers;

use App\Plaga;
use Illuminate\Http\Request;

class PlagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plaga = Plaga::where('estado',1)->paginate(10);
        return view('plaga.inicio',['plaga'=>$plaga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plaga.crear');
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
        $plaga = new Plaga();
        $plaga->nombre = $request->nombre;
        $plaga->clima = $request->clima;
        $plaga->descripcion = $request->descripcion;

        $plaga->save();
        return redirect('plaga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function show(Plaga $plaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plaga = Plaga::find($id);
        return view('plaga.editar',["plaga"=>$plaga]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plaga = Plaga::find($id);
        $plaga->nombre = $request->nombre;
        $plaga->clima = $request->clima;
        $plaga->descripcion = $request->descripcion;

        $plaga->update();
        return redirect('plaga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plaga = Plaga::find($id);
        $plaga->estado=0;

        $plaga->update();
        return redirect('plaga');
    }
}
