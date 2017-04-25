<?php

namespace SoyEducadora\Http\Controllers\EndPoints;

use Illuminate\Http\Request;

use SoyEducadora\Http\Requests;
use SoyEducadora\Http\Controllers\Controller;
use SoyEducadora\Models\TblCatPerfil;
use SoyEducadora\Models\TblOpeUsuario;
use Illuminate\Support\Facades\Auth;

class OpeUsuarioController extends Controller
{
    use AuthenticatesAndRegistersUsers;
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

          $user = new TblOpeUsuario;
          $user->fc_Nombre = $request->fc_Nombre;
          $user->fc_ApPaterno = $request->fc_ApPaterno;
          if(isset($request->fc_ApMaterno)) {
            $user->fc_ApMaterno = $request->fc_ApMaterno;
          }
          $user->fi_IdCatPerfil = $perfil->fi_IdCatPerfil;
          $user->fc_Sexo = $request->fc_Sexo;
          if(isset($request->fc_Password)) {
            $user->Password = bcrypt($request->fc_Password);
          }
          if(isset($request->Correo)) {
            $user->Correo = $request->fc_Correo;
          }
          if(isset($request->fb_UsuarioLocal)) {
            $user->fb_UsuarioLocal = $request->fb_UsuarioLocal;
          }
          if(isset($request->fi_IdUsuarioFacebook)) {
            $user->fi_IdUsuarioFacebook = $request->fi_IdUsuarioFacebook;
          }
          if(isset($request->fc_UserName)) {
            $user->fc_UserName = $request->fc_UserName;
          }
          if(isset($request->fc_UrlImagen)) {
            $user->fc_UrlImagen = $request->fc_UrlImagen;
          }
          $user->remember_token = str_random(10);
          $user->save();
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
        $user = TblOpeUsuario::findOrFail($id);
        $user->fc_Nombre = $request->fc_Nombre;
        $user->fc_ApPaterno = $request->fc_ApPaterno;
        if(isset($request->fc_ApMaterno)) {
          $user->fc_ApMaterno = $request->fc_ApMaterno;
        }
        $user->fi_IdCatPerfil = $perfil->fi_IdCatPerfil;
        $user->fc_Sexo = $request->fc_Sexo;
        if(isset($request->fc_Password)) {
          $user->Password = bcrypt($request->fc_Password);
        }
        if(isset($request->Correo)) {
          $user->Correo = $request->fc_Correo;
        }
        if(isset($request->fb_UsuarioLocal)) {
          $user->fb_UsuarioLocal = $request->fb_UsuarioLocal;
        }
        if(isset($request->fi_IdUsuarioFacebook)) {
          $user->fi_IdUsuarioFacebook = $request->fi_IdUsuarioFacebook;
        }
        if(isset($request->fc_UserName)) {
          $user->fc_UserName = $request->fc_UserName;
        }
        if(isset($request->fc_UrlImagen)) {
          $user->fc_UrlImagen = $request->fc_UrlImagen;
        }
        $user->save();
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

    public function login(Request $request)
    {
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

        $rules = [
          'fc_Correo' => 'required|email',
          'fc_Password' => 'required|min:6',
        ];

        try {

          $validator = \Validator::make($request->all(),$rules);
          if ($validator->fails()) {
            return[
              'login' => false,
              'errors' => $validator->errors()->all()
            ];
          }

          $user = Auth::attempt($request->only(['fc_Correo','fc_Password']));
          // si el usuario no existe redireccionamos a la vista login
          if(!$user) {
              return[
                'login' => false,
                'errors' => 'No encontramos al usuario'
              ];
          }
          // en caso contrario significa que el usuario existe y mandamos a home
          return $user;
        } catch (Exception $e) {
          \Log::info('Error updating TblOpeUsuario: '.$e);
          return \Response::json(['login' => 'false'],500);

        }



    }
}
