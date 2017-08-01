<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Direccion;

class DireccionesController extends Controller
{
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function index () {
    	
    	$id = Auth::id();

    	$direcciones = Direccion::where('user_id', $id)->get();             
        
        return view('direcciones.index', ['direcciones'=>$direcciones]);        	

    }

    public function create()
    {
        $user_id = Auth::id();
        // return view('/direcciones.create',['user_id'=>$user_id,'default'=>0]);
        return view('/direcciones.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $this->validate($request, [
            'nombrecompleto' => 'required|max:50',
            'calle' => 'required|max:120',
            'codigo_postal' => 'required|max:8',
            'localidad' => 'required|max:50',
            'provincia' => 'required|max:30',
            'telefono' => 'required|max:50'
            ]);

    	
    	$tieneDir = Direccion::where('user_id', Auth::id())
    							->where('default', true)
    							->count();  

        $direccion = new Direccion($request->all());


        $direccion->user_id = Auth::id();       
    	
        // $direccion = Direccion::create($request->all()); 

    	($tieneDir == 0) ? $direccion->default=true : $direccion->default=false ;


        dd($direccion); 	   	 
    	   	
    	$direccion->save();

        return redirect ('/direcciones');
    }

    public function edit($id)
    {
        $direccion = Direccion::find($id);
        return view('/direcciones.edit', ['direccion'=>$direccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombrecompleto' => 'required|max:50',
            'calle' => 'required|max:120',
            'codigo_postal' => 'required|max:8',
            'localidad' => 'required|max:50',
            'provincia' => 'required|max:30',
            'telefono' => 'required|max:50'
            ]);

        
        $direccion = Direccion::find($id); 

        $direccion->nombrecompleto = request()->nombrecompleto;
        $direccion->calle = request()->calle;
        $direccion->localidad = request()->localidad;
        $direccion->provincia = request()->provincia;
        $direccion->codigo_postal = request()->codigo_postal;
        $direccion->telefono = request()->telefono;

		$direccion->user_id = Auth::id();
        
        $direccion->save();
        
        return redirect ('/direcciones/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        Direccion::destroy($id);
        return redirect ('/direcciones/');
    }


    public function setDefault($id)
    {
                
        $direccion = Direccion::find($id);

        $direccion->default=true;          

        $direccionDefaultActual = $this->getDireccionDefault($direccion->user_id);

        $direccionDefaultActual->default = false;

        // dd($direccionDefaultActual);

        $direccionDefaultActual->save();

        $direccion->save();
        
        return redirect ('/direcciones/');
    }

    public function getDireccionDefault($user_id)
    {
    	$direccion = Direccion::where('user_id', $user_id)
    							->where('default', true)
    							->get(); 

    	$direccion = Direccion::find($direccion[0]['id']);

        return $direccion;
    }


}
