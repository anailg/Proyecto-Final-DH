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
        // $categorias = Categoria::paginate(40);
        $categorias = Categoria::orderby('id') -> get();
        
        return view('categorias.lista', compact('categorias'));
    }

    
    public function show($id)
    {
       $categoria = categoria::find($id);
        return view('categorias.show', compact('categoria')); 
    }

    
}
