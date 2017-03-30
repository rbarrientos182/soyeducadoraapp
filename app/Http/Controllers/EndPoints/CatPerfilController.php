<?php

namespace SoyEducadora\Http\Controllers\EndPoints;

use Illuminate\Http\Request;

use SoyEducadora\Http\Requests;
use SoyEducadora\Http\Controllers\Controller;
use SoyEducadora\Models\TblCatPerfil;

class CatPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return TblCatPerfil::all();
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
      //validamos que el request sea un array
      if (!is_array($request->all())) {
          return ['error' => 'request must be an array'];
      }

      // Creamos las reglas de validación
      $rules = [
        'fc_NombrePerfil' => 'required',
        'fb_Activo' => 'required|boolean'
      ];

      try {
        // Ejecutamos el validador, en caso de que falle devolvemos la respuesta
        $validator = \Validator::make($request->all(),$rules);
        if ($validator->fails()) {
          return[
            'created' => false,
            'errors' => $validator->errors()->all()
          ];
        }

        TblCatPerfil::create($request->all());
        return ['created'=> true];

      } catch (Exception $e) {
        \Log::info('Error creating Cat_Perfil: '.$e);
        return \Response::json(['created' => 'false'],500);

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
      return TblCatPerfil::findOrFail($id);
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
      //validamos que el request sea un array
      if (!is_array($request->all())) {
          return ['error' => 'request must be an array'];
      }

      // Creamos las reglas de validación
      $rules = [
        'fc_NombrePerfil' => 'required',
        'fb_Activo' => 'required|boolean'
      ];

      try {
        // Ejecutamos el validador, en caso de que falle devolvemos la respuesta
        $validator = \Validator::make($request->all(),$rules);
        if ($validator->fails()) {
          return[
            'updated' => false,
            'errors' => $validator->errors()->all()
          ];
        }

        $perfil = Cat_Perfil::findOrFail($id);
        $perfil->update($request->all());
        return ['updated' => true];

      } catch (Exception $e) {
        \Log::info('Error updating Cat_Perfil: '.$e);
        return \Response::json(['updated' => 'false'],500);

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
        $perfil = TblCatPerfil::findOrFail($id);
        $perfil->delete();
        return ['deleted' => true];
    }
}
