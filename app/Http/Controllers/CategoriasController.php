<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $categorias = categoria::paginate(5); 
        
        return view('categorias.lista', compact('categorias'));
    }

    
    public function show(Categoria $categoria)
    {
       $categoria = categoria::find($id);
        return view('categorias.show', compact('categoria')); 
    }

    
}
