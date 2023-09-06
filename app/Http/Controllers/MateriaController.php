<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::orderByDesc('id')->get();
        return view('sistema.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sistema.materias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate ([
            'nombre' => 'required',
            'codigo' => 'required',
            'creditos' => 'required',
            'descripcion' => 'required',
            'carrera_id' => 'nullable',
            'profesor_id' => 'nullable',

        ]);
        $id = Materia::create($datos );
        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        return view("sistema.materias.show",['materia'=>$materia]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('sistema.materias.edit', compact('materia'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate ([
            'nombre' => 'required',
            'codigo' => 'required',
            'creditos' => 'required',
            'descripcion' => 'required',
            'carrera_id' => 'nullable',
            'profesor_id' => 'nullable',
        

        ]);
        $materia->update($request->all());
        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
