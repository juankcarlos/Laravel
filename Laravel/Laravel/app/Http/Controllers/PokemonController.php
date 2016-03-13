<?php

namespace Pokes\Http\Controllers;

use Illuminate\Http\Request;

use Pokes\Http\Requests;
use Pokes\Http\Controllers\Controller;
use Pokes\Http\Requests\PokemonRequest;
use Pokes\Pokemon;
use Session;
use redirect;
class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poke=Pokemon::All();
        return view("vistapokes.principal",compact('poke'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistapokes.registropoke');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PokemonRequest $request)
    {
       $p=new Pokemon();
       $p->nombre=$request->nombre;
       $p->tipo=$request->tipo;
       $p->naturaleza=$request->naturaleza;
       $p->nivel=$request->nivel;
       $p->sexo=$request->sel;
       if($p->save())
       {
          return redirect()->route('poke.index')->with('mensaje','Registrado');

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $poke=Pokemon::find($id);
       return view('vistapokes.actualizar',compact('poke'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PokemonRequest $request, $id)
    {
      $p=Pokemon::find($id);
      $p->nombre=$request->nombre;
       $p->tipo=$request->tipo;
       $p->naturaleza=$request->naturaleza;
       $p->nivel=$request->nivel;
       $p->sexo=$request->sel;
       if($p->save())
       {
          return redirect()->route('poke.index')->with('mensajeact','Usuario Actualizado');

       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pk=Pokemon::destroy($id);
        
            return redirect()->route('poke.index')->with('eliminar','Pokemon Eliminado');
    }
}
