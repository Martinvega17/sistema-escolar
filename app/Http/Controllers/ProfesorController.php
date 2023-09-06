<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Materia;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
        $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'show', 'destroy']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::orderByDesc('id')->get();
        return view('sistema.profesor.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Materia::all(); // Obtén todas las materias
        return view('sistema.profesor.create', compact('materias'));
        // return view("sistema.profesor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* Validating the data that is being sent to the database. */
        $datos = $request->validate ([
            'nombre' => 'required',
            'email' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'experiencia' => 'required',
            'fecha_contratacion' => 'required',


            
            
        ]);
        /* Creating a new Huesped object and then redirecting to the index page. */
        $id = Profesor::create($datos );
        return redirect()->route('profesor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        /* Returning the view of the show page. */
        return view("sistema.profesor.show",['profesor'=>$profesor]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $huesped
     * @return \Illuminate\Http\Response
     */
  /**
   * @param Profesor huesped The Huesped model instance that should be edited.
   */
  public function edit($id)
  {
    $profesor = Profesor::find($id); // Obtén el profesor que deseas editar
    $materias = Materia::all(); // Obtén todas las materias disponibles

    return view('sistema.profesor.edit', compact('materias', 'profesor'));
  }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Profesor $profesor)
    {
       /* Validating the data that is being sent to the database. */
        $request->validate ([
            'nombre' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'materia_id' => 'required',
        ]);
         
       /* Updating the profesor object with the new data and then redirecting to the index page. */
        $profesor->update($request->all());
        return redirect()->route('profesor.index');
    }

    public function destroy(Profesor $profesor)
    {
        /* Deleting the profesor object and then redirecting to the index page. */
        $profesor->delete();
        return redirect()->route('profesor.index');
    }
}
