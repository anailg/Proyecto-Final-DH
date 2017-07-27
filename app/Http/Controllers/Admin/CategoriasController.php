<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    $this->middleware('admin');  // solo si es admin, sino redirige
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(5);        
        
        return view('categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
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
            'nombre' => 'required|unique:categorias|max:20',
            ]);

       //crear el categoria
        $categoria = Categoria::create(request()->all());

        //guardar la imagen
        $nombre = str_slug($categoria->nombre) . '.' .request()->imagen->extension();
        request()->imagen->storeAs('/public/categorias', $nombre);

        //asociar la imagen con la categoria
        $categoria->imagen = $nombre;
        $categoria->save();
        return redirect ('/admin/categorias/'.$categoria->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $this->validate($request, [
            'nombre' => 'required|unique:categorias|max:20',
            ]);

        $categoria = categoria::find($id); 

        $categoria->nombre = request()->nombre;        

        if ($request->hasFile('imagen') && !($categoria->imagen == request()->imagen) ) {   
        
            //cambiar la imagen
            $nombre = str_slug($categoria->nombre) . '.' .request()->imagen->extension();
            request()->imagen->storeAs('/public/categorias', $nombre);
      
            //asociar la imagen con el categoria
            $categoria->imagen = $nombre;

        }
    
        $categoria->save();
        // return redirect ('categorias/'.$categoria->id);
        return redirect ('/admin/categorias/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        Categoria::destroy($id);
        return redirect ('/admin/categorias/index');
    }
}
