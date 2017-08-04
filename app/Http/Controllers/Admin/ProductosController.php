<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

use Illuminate\Support\Facades\Auth;


class ProductosController extends Controller

{
    protected $redirectTo = '/home'; // Lo usa 'auth' si no esta logueado
    
    public function __construct()
    {
        // $this->middleware('auth'); // solo accesible si estas loqueado
        // $this->middleware('admin');  // solo si es admin, sino redirige
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::orderBy('nombre')->paginate(3);        
        
        return view('admin.productos.index', compact('productos'));
    }

     public function menu()
    {
       return view('admin.productos.menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');

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
            'nombre' => 'required|unique:productos|max:50',
            'descripcion' => 'required|max:500',
            'precio' => 'required|numeric'
            ]);

       //crear el producto
    	$producto = Producto::create(request()->all());

    	//guardar la imagen
    	$nombre = str_slug($producto->nombre) . '.' .request()->imagen->extension();
    	request()->imagen->storeAs('/public/productos', $nombre);

    	//asociar la imagen con el producto
    	$producto->imagen = $nombre;
    	$producto->save();
        return redirect ('/admin/productos/'.$producto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('admin.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('admin.productos.edit', compact('producto'));
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
            'nombre' => 'required|max:50',
            'descripcion' => 'max:500',
            'precio' => 'required|numeric'
            ]);
        
        $producto = Producto::find($id); 

        $producto->nombre = request()->nombre;
        $producto->descripcion = request()->descripcion;
        $producto->especificaciones = request()->especificaciones;
        (request()->activo=='on')? $producto->activo=1 : $producto->activo=0 ;
        $producto->precio = request()->precio;

        if ($request->hasFile('imagen') && !($producto->imagen == request()->imagen) ) {    
        
            //cambiar la imagen
            $nombre = str_slug($producto->nombre) . '.' .request()->imagen->extension();
            request()->imagen->storeAs('/public/productos', $nombre);
      
            //asociar la imagen con el producto
            $producto->imagen = $nombre;

        }
    
        $producto->save();
        // return redirect ('productos/'.$producto->id);
        return redirect ('/admin/productos/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        DB::transaction(function () use ($id) {
            DB::table('prod_categ')->where('producto_id', $id)->delete();
            DB::table('productos')->where('id', $id)->delete();
        });    

        // Producto::destroy($id);

        return redirect ('/admin/productos/index');
    }

    public function attachCategorias($id)
    {     
        $producto = Producto::find($id);       

        $categorias = Categoria::all();

        return view('admin.productos.categorias', compact('producto'),compact('categorias'));  
    }

    
    public function saveCategorias(Request $request, $id)
    { 
        $producto = Producto::find($id);
        
        $producto->categorias()->sync($request->categorias);

        return redirect ('/admin/productos/index');
    }

}
