<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Carrito;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }

    public function carrito()
    {

        $carrito= Carrito::where('user_id',$this->id)->get();

        return $carrito;
    }

    public function itemsCarrito()
    {
        $items= Carrito::select('productos.nombre',
                                'carritos.cantidad',
                                'productos.precio')    
                           ->join('productos','carritos.producto_id','=','productos.id')
                           ->where('user_id',$this->id)->get();

        return $items;
    }

    public function totalCarrito()
    {
        $total = DB::table('carritos')
                ->join('productos', 'productos.id', '=', 'carritos.producto_id')
                ->select(DB::raw('sum(carritos.cantidad*productos.precio) AS total'))
                ->where('carritos.user_id', $this->id)
                ->first();
                
        // dd($total);

        return $total;
    }





    public function agregar_prod_carrito($producto_id)
    {
        $item=[$this->user_id,$producto_id,1];

        Carrito::store($item);

        return back()->with('status', 'Producto agregado al carrito.');

    }
}
