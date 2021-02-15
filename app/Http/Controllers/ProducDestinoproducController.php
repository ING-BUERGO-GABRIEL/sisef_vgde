<?php

namespace App\Http\Controllers;

use App\DestinoProduccion;
use App\ProducDestinoproduc;
use App\Produccion;
use Illuminate\Http\Request;

class ProducDestinoproducController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $producdestinoproduc= ProducDestinoproduc::join('destino_produccions','destino_produccions.id','=','produc_destinoproducs.id_destinoproduccion')
        ->select('produc_destinoproducs.id as idpro','destino_produccions.destino as nompro','produc_destinoproducs.porsentaje_destinado as ape')
        ->where ('produc_destinoproducs.estado',1)
        ->where ('produc_destinoproducs.id_produccion',$id)
        ->get(); 
        $destinoproduccion = DestinoProduccion::where('estado',1)->get();        
        return view('producdestinoproduc.inicio',['producdestinoproduc'=>$producdestinoproduc,"destinoproduccion"=>$destinoproduccion])->with('idpro', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinoproduccion = DestinoProduccion::where('estado',1)->get();
        $produccion = Produccion::where('estado',1)->get();
        return view('producdestinoproduc.crear',["destinoproduccion"=>$destinoproduccion,"produccion"=>$produccion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producdestinoproduc = new ProducDestinoproduc();
        $producdestinoproduc->id_produccion = $request->id_produccion;
        $producdestinoproduc->id_destinoproduccion = $request->id_destinoproduccion;
        $producdestinoproduc->porsentaje_destinado = $request->porsentaje_destinado;

        $producdestinoproduc->save();
        return redirect('producdestinoproduc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProducDestinoproduc  $producDestinoproduc
     * @return \Illuminate\Http\Response
     */
    public function show(ProducDestinoproduc $producDestinoproduc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProducDestinoproduc  $producDestinoproduc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producdestinoproduc = ProducDestinoproduc::find($id);
        $destinoproduccion = DestinoProduccion::where('estado',1)->get();
        $produccion = Produccion::where('estado',1)->get();
        return view('producdestinoproduc.editar',["producdestinoproduc"=>$producdestinoproduc,"destinoproduccion"=>$destinoproduccion,"produccion"=>$produccion ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProducDestinoproduc  $producDestinoproduc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producdestinoproduc = new ProducDestinoproduc();
        $producdestinoproduc->id_produccion = $request->id_produccion;
        $producdestinoproduc->id_destinoproduccion = $request->id_destinoproduccion;
        $producdestinoproduc->porsentaje_destinado = $request->porsentaje_destinado;
        $producdestinoproduc->save();

        $producdestinoproduc= ProducDestinoproduc::join('destino_produccions','destino_produccions.id','=','produc_destinoproducs.id_destinoproduccion')
        ->select('produc_destinoproducs.id as idpro','destino_produccions.destino as nompro','produc_destinoproducs.porsentaje_destinado as ape')
        ->where ('produc_destinoproducs.estado',1)
        ->where ('produc_destinoproducs.id_produccion',$id)
        ->get(); 
        $destinoproduccion = DestinoProduccion::where('estado',1)->get();        
        return view('producdestinoproduc.inicio',['producdestinoproduc'=>$producdestinoproduc,"destinoproduccion"=>$destinoproduccion])->with('idpro', $id);
    }

    /**s
     * Remove the specified resource from storage.
     *
     * @param  \App\ProducDestinoproduc  $producDestinoproduc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $producdestinoproduc = ProducDestinoproduc::find($request->id);
        $producdestinoproduc->estado=0;
        $producdestinoproduc->update();

        $producdestinoproduc= ProducDestinoproduc::join('destino_produccions','destino_produccions.id','=','produc_destinoproducs.id_destinoproduccion')
        ->select('produc_destinoproducs.id as idpro','destino_produccions.destino as nompro','produc_destinoproducs.porsentaje_destinado as ape')
        ->where ('produc_destinoproducs.estado',1)
        ->where ('produc_destinoproducs.id_produccion',$request->idpro)
        ->get(); 
        $destinoproduccion = DestinoProduccion::where('estado',1)->get();        
        return view('producdestinoproduc.inicio',['producdestinoproduc'=>$producdestinoproduc,"destinoproduccion"=>$destinoproduccion])->with('idpro',$request->idpro);
    }
}
