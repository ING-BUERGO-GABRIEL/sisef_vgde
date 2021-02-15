<?php

namespace App\Http\Controllers;

use App\TipoDurazno as AppTipoDurazno;
use Illuminate\Http\Request;
use App\TipoDurazno;
use DB;

class PublicaController extends Controller
{

    public function index()
    {
        return view('publica.inicio');
    }


    public function estadistica()
    {
        return view('publica.estadistica');
    }


    public function tipos()
    {
        $tipodurazno = TipoDurazno::where('estado',1)->get();
        return view('publica.tipo',["tipodurazno"=>$tipodurazno]);
    }

}
