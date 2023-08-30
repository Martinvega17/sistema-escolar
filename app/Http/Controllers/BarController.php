<?php

namespace App\Http\Controllers;

use App\Exports\BaresExport;
use Illuminate\Http\Request;
use App\Models\Bar;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel;

class BarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

    }

    public function exportAllServicesofBarPDF() {
        // return (new BaresExport)->download('bares.pdf', Excel::DOMPDF);
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bares = Bar::orderByDesc('id')->get();
        return view('servicios.bar.index' , compact('bares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("servicios.bar.create");
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
            'producto' => 'required',
            'precio' => 'required',
            'codigo' => 'required',
            'vendido' => 'required',
            
            
        ]);
        $bares = Bar::create($datos );
        return redirect()->route('bar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function show(Bar $bar)
    {
        return view("servicios.bar.show",['bar'=>$bar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function edit(Bar $bar)
    {
        return view('servicios.bar.edit', compact('bar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bar $bar)
    {
        $request->validate ([
            'producto' => 'required',
            'precio' => 'required',
            'codigo' => 'required',
            'vendido' => 'required',
        ]);
        $bar->update($request->all());
        return redirect()->route('bar.index');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bar $bar)
    {
        $bar->delete();
        return redirect()->route('bar.index');
    }
}
