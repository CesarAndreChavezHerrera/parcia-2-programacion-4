<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;
use App\Http\Resources\Alimento as AlimentoResource;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alimento = Alimento::all();
        return AlimentoResource::collection($alimento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $alimento = $request->isMethod('put') ? Alimento::findOrFail($request->id) : new Alimento;
        $alimento->id = $request->input('id');
        $alimento->nombre = $request->input('nombre');
        $alimento->descripcion = $request->input('descripcion');
        $alimento->tipo = $request->input('tipo');
        $alimento->fecha_vencimiento = $request->input('fecha_vencimiento');

        if($alimento->save()){
            return new AlimentoResource($alimento);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtener un registro de alimento para acceder por medio de la ruta
        $alimento = Alimento::findOrFail($id);
        /* retornar los datos del registro obtenido */
        return new AlimentoResource($alimento);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimento $alimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alimento $alimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimento $alimento)
    {
        //obtener el metodo
        $alimento = Alimento::findOrFail($id);

        if($alimento->delete()){
            return new AlimentoResource($alimento);
        }
    }
}
