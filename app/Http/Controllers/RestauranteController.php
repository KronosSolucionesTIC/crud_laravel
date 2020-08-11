<?php

namespace App\Http\Controllers;

use App\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['restaurante']=Restaurante::paginate(5);

        return view('restaurante.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('restaurante.create');
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
        $datosRestaurante=request()->except('_token');

        if($request->hasFile('url')){
            $datosRestaurante['url'] = $request->file('url')->store('uploads','public');
        }

        Restaurante::insert($datosRestaurante);

        return redirect('restaurante')->with('Mensaje','Restaurante agregado con exito');
        //return response()->json($datosRestaurante);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurante $restaurante)
    {
        //
        $datos['restaurante']=Restaurante::paginate(5);

        return view('restaurante.listar',$datos);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $restaurante = Restaurante::findOrFail($id);

        return view('restaurante.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosRestaurante=request()->except(['_token','_method']);

        if($request->hasFile('url')){

            $restaurante = Restaurante::findOrFail($id);

            //Borra fotografia
            Storage::delete('public/'.$restaurante->url);

            $datosRestaurante['url'] = $request->file('url')->store('uploads','public');
        }

        Restaurante::where('id','=',$id)->update($datosRestaurante);

        $restaurante = Restaurante::findOrFail($id);

        return redirect('restaurante')->with('Mensaje','Empleado modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $restaurante = Restaurante::findOrFail($id);

        //Borra fotografia
        if(Storage::delete('public/'.$restaurante->url)){
            Restaurante::destroy($id);
        }

        return redirect('restaurante')->with('Mensaje','Empleado eliminado con exito');
    }
}
