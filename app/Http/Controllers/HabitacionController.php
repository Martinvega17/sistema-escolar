<?php

namespace App\Http\Controllers;
use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
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
        $habitaciones = Habitacion::orderByDesc('id')->get();
        return view('hotel.habitacion.index', compact('habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hotel.habitacion.create");
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
            'hotel' => 'required',
            'n_habitaciones' => 'required',
            'camas' => 'required',
            'celular' => 'required',
         
        ]);
        $id = Habitacion::create($datos );
        return redirect()->route('habitacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacion $habitacion)
    {
        return view("hotel.habitacion.show",['habitacion'=>$habitacion]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacion $habitacion)
    {
        return view('hotel.habitacion.edit', compact('habitacion'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacion $hotel)
    {
        $request->validate ([
            'titulo' => 'required',
            'rfc' => 'required',
            'direccion' => 'required',
            'celular' => 'required',
        

        ]);
        $hotel->update($request->all());
        return redirect()->route('habitacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacion $habitacion)
    {
        $habitacion->delete();
        return redirect()->route('habitacion.index');
    }
}
