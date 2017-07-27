<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;

use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller

{
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        // $this->middleware('auth');        
    }
    
    public function lista()
    {
        $productos = Producto::paginate(5);  
              // agregar where activo
        
        return view('productos.lista', compact('productos'));
    }

    
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    
}
