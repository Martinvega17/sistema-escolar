<?php

namespace App\Http\Controllers;

use App\Models\Huesped;
use Illuminate\Http\Request;

class HuespedController extends Controller
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
        $huespedes = Huesped::orderByDesc('id')->get();
        return view('hotel.huesped.index', compact('huespedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hotel.huesped.create");
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
            'nombres' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'celular' => 'required',
            'email' => 'required',
            
            
        ]);
        /* Creating a new Huesped object and then redirecting to the index page. */
        $id = Huesped::create($datos );
        return redirect()->route('huesped.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function show(Huesped $huesped)
    {
        /* Returning the view of the show page. */
        return view("huesped.show",['huesped'=>$huesped]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */
  /**
   * @param Huesped huesped The Huesped model instance that should be edited.
   */
    public function edit(Huesped $huesped)
    {
/* Returning the view of the edit page. */
        return view('hotel.huesped.edit', compact('huesped'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Huesped $huesped)
    {
       /* Validating the data that is being sent to the database. */
        $request->validate ([
            'nombres' => 'required',
            'cedula' => 'required',
            'celular' => 'required',
            'email' => 'required',
        ]);
       /* Updating the huesped object with the new data and then redirecting to the index page. */
        $huesped->update($request->all());
        return redirect()->route('huesped.index');
    }

    public function destroy(Huesped $huesped)
    {
        /* Deleting the huesped object and then redirecting to the index page. */
        $huesped->delete();
        return redirect()->route('huesped.index');
    }
}
