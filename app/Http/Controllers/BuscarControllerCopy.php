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

    	if ($request->criterio==null) { 
    		$criterio=

    	if ($request->categoria==null) {

    		if ($request->criterio==null) { 

    			$productos = Producto::orderBy('nombre')->paginate(5);

    		} else {

	    		$productos = Producto::where ('nombre','like',$criterio) 
	    							 ->orwhere ('descripcion','like',$criterio) 
	    							 ->paginate(5);
	    	}
	    } else {

	    	// $query='SELECT * FROM productos '.
// 	    			'INNER JOIN prod_categ ON id = producto_id '.
// 	    			'WHERE ((categoria_id='.$request->categoria.') and '.
//							'(nombre like'.$criterio.' or descripcion like'.$criterio.'))';


	    	// dd($query);

	    	$productos = Producto::join('prod_categ','id','=','producto_id')
	    					->where('categoria_id',$request->categoria)	    
	    					->where(function ($query,$criterio) {
					                $query->where('nombre','like',$criterio) 
	    								  ->orwhere ('descripcion','like',$criterio);
	            					})
	    					->paginate(5);
	    }


    	return view('productos.lista', compact('productos'));

    }
}

// $productos = DB::table('productos')
// 	    					->where ('nombre','like',$criterio) 
// 	    					->orwhere ('descripcion','like',$criterio) 
// 	    					-> paginate(5);


