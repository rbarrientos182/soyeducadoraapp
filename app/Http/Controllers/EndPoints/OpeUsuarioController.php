<?php

namespace SoyEducadora\Http\Controllers\EndPoints;

use Illuminate\Http\Request;

use SoyEducadora\Http\Requests;
use SoyEducadora\Http\Controllers\Controller;
use SoyEducadora\Models\TblCatPerfil;
use SoyEducadora\Models\TblOpeUsuario;


class OpeUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($fi_IdCatPerfil)
    {
        return TblOpeUsuario::where('fi_IdCatPerfil',$fi_IdCatPerfil)->get();
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
    public function store(Request $request,$fi_IdCatPerfil)
    {
        //validamos que el request sea un array
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

        // Creamos las reglas de validación
        $rules = [
          'fc_Nombre' => 'required',
          'fc_ApPaterno' => 'required',
          'fc_Sexo' => 'required|max:1',
          'fc_Correo' => 'email',
          'fc_Password' => 'min:6',
          'fi_IdUsuarioFacebook' => 'numeric'
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

          $perfil = TblCatPerfil::findOrFail($fi_IdCatPerfil);
          $input = $request->all();
          $input['fi_IdCatPerfil'] = $perfil->fi_IdCatPerfil;
          $user = new TblOpeUsuario;
          $user->create($input);
          //TblOpeUsuario::create($input);
          //$user = TblOpeUsuario::all();
          return ['created'=> true,
                  'id' => $user->fi_IdOpeUsuario];

        } catch (Exception $e) {
          \Log::info('Error creating TblOpeUsuario: '.$e);
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
        return TblOpeUsuario::findOrFail($id);
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
        'fc_Nombre' => 'required',
        'fc_ApPaterno' => 'required',
        'fc_Sexo' => 'required|max:1',
        'fc_Correo' => 'email',
        'fc_Password' => 'min:6',
        'fi_IdUsuarioFacebook' => 'numeric'
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
        $usuario = TblOpeUsuario::findOrFail($id);
        $usuario->update($request->all());
        return ['updated' => true];

      } catch (Exception $e) {
        \Log::info('Error updating TblOpeUsuario: '.$e);
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
      $user = TblOpeUsuario::findOrFail($id);
      $user->delete();
      return ['deleted' => true];
    }
}
