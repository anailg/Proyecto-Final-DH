<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;


class ProductosController extends Controller

{
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        // $this->middleware('auth');        
    }
    
    public function lista()
    {
        $productos = Producto::where('activo', 1)
                ->orderBy('nombre')
                ->paginate(2);  
           
        
        return view('productos.lista', compact('productos'));
    }

    
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    
}
