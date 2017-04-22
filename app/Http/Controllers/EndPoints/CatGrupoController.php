<?php

namespace SoyEducadora\Http\Controllers\EndPoints;

use Illuminate\Http\Request;

use SoyEducadora\Http\Requests;
use SoyEducadora\Http\Controllers\Controller;
use SoyEducadora\Models\TblOpeUsuario;
use SoyEducadora\Models\TblCatEscuela;
use SoyEducadora\Models\TblCatGrupo;

class CatGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($fi_IdOpeUsuario)
    {
        return TblCatGrupo::where('fi_IdOpeUsuario',$fi_IdOpeUsuario)->get();
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
    public function store(Request $request, $fi_IdOpeUsuario)
    {
      //validamos que el request sea un array
      if (!is_array($request->all())) {
          return ['error' => 'request must be an array'];
      }

      // Creamos las reglas de validación
      $rules = [
        'fc_Grado' => 'required',
        'fc_Grupo' => 'required',
        'fb_Activo' => 'required|boolean',
        'fc_CicloEscolar' => 'required',
        'fc_NombreEscuela' => 'required'
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

        //buscamos el usuario que va agregar el grupo
        $usuario = TblOpeUsuario::findOrFail($fi_IdOpeUsuario);
        $input = $request->all();
        $input['fi_IdOpeUsuario'] = $usuario->fi_IdOpeUsuario;

        //realizamos una busqueda a escuela para si el nombre ya existe
        $escuela = TblCatEscuela::where("fc_NombreEscuela","LIKE","\\".$request->fc_NombreEscuela."%")->get();

        // si la escuela existe se obtiene el id
        if($escuela)
        {
            $input['fi_IdCatEscuela'] = $escuela->fi_IdCatEscuela;

        }

        // si no existe se agrega y se obtiene el id
        else {

            $school = new TblCatEscuela;
            $school->fc_NombreEscuela = $request->fc_NombreEscuela;
            $school->fc_Direccion = '';
            $school->fi_IdOpeUsuario = $usuario->fi_IdOpeUsuario;
            $school->save();
            $input['fi_IdCatEscuela'] = $school->fi_IdCatEscuela;
        }

        //creamos el grupo
        $grupo = TblCatGrupo;
        $grupo->create($input);

        return ['created'=> true,
                'id' => $grupo->fi_IdCatGrupo];

      } catch (Exception $e) {
        \Log::info('Error creating TblCatGrupo: '.$e);
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
        return TblCatGrupo::findOrFail($id);
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
        'fc_Grado' => 'required',
        'fc_Grupo' => 'required',
        'fb_Activo' => 'required|boolean',
        'fc_CicloEscolar' => 'required',
        'fc_NombreEscuela' => 'required'
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

        $input = $request->all();
        //realizamos una busqueda a escuela para si el nombre ya existe
        $escuela = TblCatEscuela::where("fc_NombreEscuela","LIKE","\\".$request->fc_NombreEscuela."%")->get();

        // si la escuela existe se obtiene el id
        if($escuela)
        {
            $input['fi_IdCatEscuela'] = $escuela->fi_IdCatEscuela;

        }

        // si no existe se agrega y se obtiene el id
        else {

            $school = new TblCatEscuela;
            $school->fc_NombreEscuela = $request->fc_NombreEscuela;
            $school->fc_Direccion = '';
            $school->fi_IdOpeUsuario = $usuario->fi_IdOpeUsuario;
            $school->save();
            $input['fi_IdCatEscuela'] = $school->fi_IdCatEscuela;
        }


        $grupo = TblCatGrupo::findOrFail($id);
        $grupo->update($input);
        return ['updated' => true];

      } catch (Exception $e) {

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
      $grupo = TblCatGrupo::findOrFail($id);
      $grupo->delete();
      return ['deleted' => true];
    }
}
