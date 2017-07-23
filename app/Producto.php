<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Producto extends Model
{

	// use Sluggable;

    protected $fillable = ['nombre', 'descripcion', 'especificaciones', 'imagen'];

     public function categorias()
    {
    	return $this->belongsToMany('App\Categoria');
    }

    // public function sluggable()
    // {
    //     return [
    //         'slug' => ['source' => 'nombre']
    //     ];
    // }
    
}
