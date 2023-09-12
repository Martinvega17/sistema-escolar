<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Materia;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
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
        $alumnos = Alumno::with('materia', 'carrera')->orderByDesc('id')->get();
        return view('sistema.alumno.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Materia::all(); // Obtén todas las materias
        $carreras = Carrera::all(); // Obtén todas las carreras
        return view('sistema.alumno.create', compact('materias', 'carreras'));
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
        $datos = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'matricula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'semestre' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'nullable',
            'edad' => 'required',
            'curp' => 'required',
            'fecha_ingreso' => 'required',
            'estatus' => 'nullable',
            'observaciones' => 'nullable',

            'materia_id' => 'required', // Asegúrate de incluir materia_id en la validación
            'carrera_id' => 'required',
        ]);
        /* Creating a new Huesped object and then redirecting to the index page. */
        // Crear un nuevo profesor con los datos del formulario
        $alumno = Alumno::create($datos);

        // Guardar la relación con la materia
        $alumno->materia_id = $request->input('materia_id');
        $alumno->save();

        // Guardar la relación con la materia
        $alumno->carrera_id = $request->input('carrera_id');
        $alumno->save();

        return redirect()->route('alumno.index');
        $id = Alumno::create($datos);
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view("sistema.alumno.show", ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $carreras = Carrera::all();
        $materias = Materia::all();

        return view('sistema.alumno.edit', compact('materias', 'alumno', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'matricula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'semestre' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'nullable',
            'edad' => 'required',
            'curp' => 'required',
            'fecha_ingreso' => 'required',
            'estatus' => 'nullable',
            'observaciones' => 'nullable',

            'materia_id' => 'required',
            'carrera_id' => 'required',
        ]);

        /* Updating the profesor object with the new data, including materia_id, and then redirecting to the index page. */
        $alumno->update($request->all());
        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }
}
