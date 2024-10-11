<?php

namespace App\Http\Controllers;

use App\Models\Planeacion;
use Illuminate\Http\Request;

class PlaneacionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      return Planeacion::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Planeacion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planeacion = Planeacion::findOrFail($id);
        return response()->json($planeacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Planeacion $programacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $planeacion = Planeacion::findOrFail($id);
        $planeacion->update($request->all());
        return $planeacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planeacion = Planeacion::findOrFail($id);
        $planeacion->delete();
        return 204;
    }
}
