<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book\category;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $category_all = Category::all();
        $title = "Página Inicial";
        return view('painel.paginaInicial',compact('title','category_all'));
    }

    public function explorar(){
        $category_all = Category::all();
        $title = "Explorar";
        return view('painel.explorar',compact('title','category_all'));
    }

    public function biblioteca(){
        $title = "Biblioteca";
        return view('painel.biblioteca', compact('title'));
    }

    public function meusLivros(){
        $title = "Meus Livros";
        return view('painel.meusLivros', compact('title'));
    }

    public function escrever(){
        $category_all = Category::all();
        $title = "Escrever";
        return view('painel.escrever', compact('title', 'category_all'));
    }

}
 