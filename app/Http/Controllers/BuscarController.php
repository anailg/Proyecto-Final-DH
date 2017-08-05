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
        //Por la única razón que uso el select es porque categorias y productos comparten la columna "nombre"
        //con el select, fuerzo a que (a pesar del join) la consulta sólo traiga resultados de la tabla productos
        //además, esto hace que la paginación sea sobre el total de prouducto y no de categorías.
        $query = Producto::select(\DB::raw('productos.*'));

        //si el request filtra por categoría hago el inner join (porque la relación es de muchos a muchos)
        if ($request->categoria) {
            $query->join('prod_categ', 'productos.id', '=', 'prod_categ.producto_id')
                ->join('categorias', 'categorias.id', '=', 'prod_categ.categoria_id')
                ->where('categorias.id', $request->categoria)
            ;
        }

        //si hay un criterio, lo agrego con el where
        if ($request->criterio) {
            $criterio = '%'.$request->criterio.'%';
            $query->where(function ($query) use ($criterio) {
                $query->where('productos.nombre', 'like', $criterio) 
                    ->orwhere ('descripcion', 'like', $criterio);
                }
            );
        }

        //ejecuto la query
        $productos = $query->orderBy('nombre')->paginate(2);

        return view('productos.lista', compact('productos'));
    }
}



