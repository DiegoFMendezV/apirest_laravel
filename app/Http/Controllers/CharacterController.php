<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;


class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return $characters;
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
        $character = new Character();
        $character->nombre = $request->nombre;
        $character->estado = $request->estado;
        $character->especie = $request->especie;
        $character->tipo = $request->tipo;
        $character->genero = $request->genero;
        $character->origen = $request->origen;
        $character->imagen = $request->imagen;
        
        $character->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);
        return $character;
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
    public function update(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->nombre = $request->nombre;
        $character->estado = $request->estado;
        $character->especie = $request->especie;
        $character->tipo = $request->tipo;
        $character->genero = $request->genero;
        $character->origen = $request->origen;
        $character->imagen = $request->imagen;

        $character->save();

        return $character;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $character = Character::destroy($request->id);
        return $character;
    }
}
