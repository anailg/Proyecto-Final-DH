<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Categoria;
Use App\Producto;
Use DB;

class BuscarController extends Controller
{
    public function pedirCriterio() {

    	$categorias = Categoria::orderBy('nombre')->get();

    	return view('/buscar',compact('categorias'));

    }

    public function buscar(Request $request) {
    	
    	$criterio='%'.$request->criterio.'%';

    	if ($request->categoria==null) {

    		if ($request->criterio==null) { 

    			$productos = Producto::orderBy('nombre')->paginate(10);

    		} else {
    			
	    		$productos = Producto::where ('nombre','like',$criterio) 
	    							 ->orwhere ('descripcion','like',$criterio) 
	    							 ->paginate(10);
	    	}
	    } else {	

	    	if ($request->criterio==null) { 

	    		$productos = Producto::join('prod_categ','id','=','producto_id')
	    					->where('categoria_id',$request->categoria)
	    					->paginate(10);	    
  
	    	} else {

	    		$productos = Producto::join('prod_categ','id','=','producto_id')
	    					->where('categoria_id',$request->categoria)	    
	    					->where(function ($query) use ($criterio) {	 
					                $query->where('nombre','like',$criterio) 
	    								  ->orwhere ('descripcion','like',$criterio);
	            					}) 	            			 		
	    					->paginate(1000);
	    	}

	    	// ->toSql();
	    	// dd($productos);
	    }


    	return view('productos.lista', compact('productos'));

    }
}



