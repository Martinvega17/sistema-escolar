<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HotelController extends Controller
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
        $hoteles = Hotel::orderByDesc('id')->get();
        return view('hotel.index', compact('hoteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hotel.create");
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
            'titulo' => 'required',
            'rfc' => 'required',
            'direccion' => 'required',
            'celular' => 'required',
         
        ]);
        $id = Hotel::create($datos );
        return redirect()->route('hotel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view("hotel.show",['hotel'=>$hotel]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotel.edit', compact('hotel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate ([
            'titulo' => 'required',
            'rfc' => 'required',
            'direccion' => 'required',
            'celular' => 'required',
        

        ]);
        $hotel->update($request->all());
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotel.index');
    }
}
