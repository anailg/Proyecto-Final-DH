<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre','imagen'];

    public $timestamps = true; 

    public function productos()
    {
    	return $this->belongsToMany('App\Producto');
    }
}
