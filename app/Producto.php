<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre','descripcion','especificaciones','activo','precio','imagen'];
    
    public $timestamps = true; 

    public function categorias()
    {
    	return $this->belongsToMany('App\Categoria');
    }
    
}
