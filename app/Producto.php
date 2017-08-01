<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Producto extends Model
{
    protected $fillable = ['nombre','descripcion','especificaciones','activo','precio','imagen'];
    
    public $timestamps = true; 

    public function categorias()
    {
    	return $this->belongsToMany('App\Categoria', 'prod_categ');
    }

    public function tieneCategoria($idCateg)
    {
    	return ($this->categorias()->where('id',$idCateg)->count() ) ; 

    }

    public function categoriasAsoc()
    {
    	return DB::table('categorias')->join('prod_categ','id','=','categoria_id')
    								 ->where('producto_id',$this->id)->get();

    }
    
}
