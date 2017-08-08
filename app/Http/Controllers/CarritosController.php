<?php

namespace App\Http\Controllers;

use App\User;
use App\Carrito;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CarritosController extends Controller
{
    // protected $redirectTo = '/home';
    
    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function agregar_producto($producto_id){

        
        $item=Carrito::where('user_id',Auth::id())
                       ->where('producto_id',$producto_id)
                        ->first();

        if ($item) {

            $item->cantidad=$item->cantidad+1;
            
        } else {

            $item = new Carrito();
            $item->user_id=Auth::id();
            $item->producto_id=$producto_id;
            $item->cantidad=1;
        }
        

        // dd($item);

        $item->save();

        return back()->with('status', 'Producto agregado al carrito.');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($item)
    {
        Carrito::create($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $carritoItems=Auth::user()->itemsCarrito();

        $totalCarrito=Auth::user()->totalCarrito();

        // dd($totalCarrito);

        return view( '/carrito',['items'=>$carritoItems, 'totalCarrito'=>$totalCarrito]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    
   


}
