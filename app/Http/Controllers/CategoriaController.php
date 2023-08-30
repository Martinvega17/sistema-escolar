<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;




class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

    }
    public function index()
    {
    $categorias = Categoria::orderByDesc('id')->get();
    return view('hotel.categoria.index', compact('categorias'));
        

    }
    public function create()
    {
        return view("hotel.categoria.create");
        
    }
    public function store(Request $request)
    {
        $datos = $request->validate ([
            'nombre' => 'required',
            'descripcion' => 'required',
            
            
        ]);
        Categoria::create($datos );
        return redirect()->route('categorias.index');

    }
    public function show(Categoria $categoria)
    {
        return view("hotel.categoria.show",['categoria'=>$categoria]);
        
    }
    public function edit(Categoria $categoria)
    {
        return view('hotel.categoria.edit', compact('categoria'));

        
    }
    public function update(Request $request,Categoria $categoria)
    {
        $request->validate ([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        $categoria->update($request->all());
        return redirect()->route('categorias.index');

    }
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
