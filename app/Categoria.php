<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
    protected $fillable = ['nombre','imagen'];

    public $timestamps = true; 

    public function productos()
    {
    	return $this->belongsToMany('App\Producto', 'prod_categ' );
    }

    public function tieneProducto($idProd)
    {
    	return ( $this->productos()->where('id',$idProd)->count() )   ; 

    }

    public function productosAsoc()
    {
    	return DB::table('productos')->join('prod_categ','id','=','producto_id')
    								 ->where('categoria_id',$this->id)->get();

    }
}
