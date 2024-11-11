<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Página Inicial";
        return view('painel.paginaInicial',compact('title'));
    }

    public function explorar(){
        $title = "Explorar";
        return view('painel.explorar',compact('title'));
    }

    public function biblioteca(){
        $title = "Biblioteca";
        return view('painel.biblioteca', compact('title'));
    }
}
 