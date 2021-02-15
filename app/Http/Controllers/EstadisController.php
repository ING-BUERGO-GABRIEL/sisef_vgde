<?php

namespace App\Http\Controllers;

use App\TipoDurazno as AppTipoDurazno;
use Illuminate\Http\Request;
use App\TipoDurazno;
use DB;

class EstadisController extends Controller
{

    public function index()
    {
        return view('estadis.barras');
    }
    public function lineas()
    {
        return view('estadis.lineas');
    }
    public function torta()
    {
        return view('estadis.torta');
    }
}
