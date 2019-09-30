<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delegacion;
use App\Region;
use App\Nomenclatura;
use App\Nivel;

class DelegacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $delegaciones = Delegacion::all();
        
        $region = Region::all();
        return view ('admin.delegacion.index',compact('delegaciones','region'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nomenclaturas = Nomenclatura::all();
        $niveles = Nivel::all();
        $regiones = Region::all();
        return view ('admin.delegacion.create',compact('nomenclaturas','niveles','regiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje =[
            'numero.required' => 'Es necesario ingresar un numero en el campo NÚMERO DELEGACIONAL.',
            'numero.numeric' => 'El campo NÚMERO DELEGACIONAL no tiene que contener texto.',
            'sede.required' => 'Es necesario ingresar un nombre en el campo SEDE.'
        ];
        $reglas = [
            'numero' => 'required|numeric',
            'sede' => 'required'
        ];
        $this->validate($request, $reglas, $mensaje);
        $delegacion = new Delegacion();
        
        $delegacion->nomenclatura_id = $request->get('nomenclatura');
        $delegacion->numero = $request->input('numero');
        $delegacion->sede = $request->input('sede');
        $delegacion->nivel_id = $request->get('nivel');
        $delegacion->region_id = $request->get('region');
        
        $valueNom = Nomenclatura::find($delegacion->nomenclatura_id);
        $delegacion->slug=$valueNom->nomenclatura.$delegacion->numero;
        $delegacion->deleg=$valueNom->nomenclatura.$delegacion->numero;
        
        $delegacion->save();
        return redirect('/delegacion')->with('success_create','La delegación '.$delegacion->nomenclatura->nomenclatura.$delegacion->numero.' se CREADO satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $delegacion = Delegacion::where('slug', $slug)->firstOrFail();;
        return view('admin.delegacion.show',compact('delegacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Delegacion $delegacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delegacion $delegacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delegacion $delegacion)
    {
        //
    }
}
