<?php

namespace App\Http\Controllers;

use App\Tercero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tercero=DB::table('tercero')       
        ->join('elementos_listas','elementos_listas.tipo_lista_id','=' ,'tipo_lista_id.id')
        ->join('elementos_listas','elementos_listas.id','=' ,'elementos_lista.id')
        ->join('elementos_listas','tipo_identificacion_id.id','=' ,'tipo_lista_id.id')
        ->join('elementos_listas','tipo_tercero_id.id','=' ,'tipo_lista_id.id')
        ->join('elementos_listas','departamento_id.id','=' ,'tipo_lista_id.id')
        ->join('elementos_listas','idmunicipio_id.id','=' ,'tipo_lista_id.id')
        ->join('elementos_listas','tipo_contribuyente_id.id','=' ,'tipo_lista_id.id')
        ->select('tercero.departamento_id','tercero.idmunicipio_id',
        'tercero.tipo_identificacion_id','tercero.numero_identificacion',
        'tercero.nombre1','tercero.nombre2','tercero.apellido1', 'tercero.apellido2',
        'tercero.tipo_tercero_id')
        ->get();

       
        //return Tercero::all();
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
        $tercero = new Tercero();
        $tercero->tipo_identificacion_id =$request['tipo_identificacion_id'];
        $tercero->numero_identificacion =$request['numero_identificacion'];
        $tercero->tipo_tercero_id =$request['tipo_tercero_id'];
        $tercero->nombre1 =$request['nombre1'];
        $tercero->nombre2 =$request['nombre2'];
        $tercero->apellido1 =$request['apellido1'];
        $tercero->apellido2 =$request['apellido2'];
        $tercero->departamento_id =$request['departamento_id'];
        $tercero->idmunicipio_id =$request['idmunicipio_id'];
        $tercero->tipo_contribuyente_id =$request['tipo_contribuyente_id'];
        $tercero->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tercero::where('id',$request['id'])
        ->update([
            'tipo_identificacion_id'=>$request['tipo_identificacion_id'],
            'numero_identificacion'=>$request['numero_identificacion'],
            'tipo_tercero_id'=>$request['tipo_tercero_id'],
            'nombre1'=>$request['nombre1'],
            'nombre2'=>$request['nombre2'],
            'apellido1'=>$request['apellido1'],
            'apellido2'=>$request['apellido2'],
            'departamento_id'=>$request['departamento_id'],
            'idmunicipio_id'=>$request['idmunicipio_id'],
            'tipo_contribuyente_id'=>$request['tipo_contribuyente_id'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tercero::destroy($id);
    }
}
