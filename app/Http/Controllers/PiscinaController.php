<?php

namespace App\Http\Controllers;

use App\Models\Piscina;
use Illuminate\Http\Request;

class PiscinaController extends Controller
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
        $piscinas = Piscina::orderByDesc('id')->get();
        return view('servicios.piscina.index', compact('piscinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("servicios.piscina.create");
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
            'opcion' => 'required',
            'precio' => 'required',
             
        ]);
        $piscinas = Piscina::create($datos );
        return redirect()->route('piscina.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piscina  $piscina
     * @return \Illuminate\Http\Response
     */
    public function show(Piscina $piscina)
    {
        return view("servicios.piscina.show",['piscina'=>$piscina]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piscina  $piscina
     * @return \Illuminate\Http\Response
     */
    public function edit(Piscina $piscina)
    {
        return view('servicios.piscina.edit', compact('piscina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Piscina  $piscina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piscina $piscina)
    {
        $request->validate ([
            'opcion' => 'required',
            'precio' => 'required',
        ]);
        $piscina->update($request->all());
        return redirect()->route('piscina.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piscina  $piscina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piscina $piscina)
    {
        $piscina->delete();
        return redirect()->route('piscina.index');
    }
}
