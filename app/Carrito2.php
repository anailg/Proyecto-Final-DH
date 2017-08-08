<?php

namespace App;
use App\Producto;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{     
	protected $fillable = ['user_id','producto_id','cantidad'];

	public $timestamps = false; 

	public function producto() {
		// return $this->hasOne('App\Producto', 'id', 'producto_id');
	}

	public function user() {

		return DB::table('user')->where('id',$this->user_id)->get();
		// return $this->hasOne('App\User', 'id', 'user_id');
	}

    public function getProducto() {

        return Producto::where('id',$this->producto_id)->get();
    }

    
}
