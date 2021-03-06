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
          'email' => 'email',
          'password' => 'min:6',
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
          $user->fc_Nombre = $request->fc_Nombre;//1
          $user->fi_IdCatPerfil = $perfil->fi_IdCatPerfil;//2
          if(isset($request->fc_Sexo)) {
            $user->fc_Sexo = $request->fc_Sexo;//3
          }
          if(isset($request->password)) {
            $user->password = bcrypt($request->password);//4
          }
          if(isset($request->email)) {
            $user->email = $request->email;//5
          }
          if(isset($request->fb_UsuarioLocal)) {
            $user->fb_UsuarioLocal = $request->fb_UsuarioLocal;//6
          }
          if(isset($request->fi_IdUsuarioFacebook)) {
            $user->fi_IdUsuarioFacebook = $request->fi_IdUsuarioFacebook;//7
          }
          if(isset($request->fc_UserName)) {
            $user->fc_UserName = $request->fc_UserName;//8
          }
          if(isset($request->fc_UrlImagen)) {
            $user->fc_UrlImagen = $request->fc_UrlImagen;//9
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
    public function show($id,$id2)
    {
        return TblOpeUsuario::findOrFail($id2);
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
    public function update(Request $request, $id, $id2)
    {
      //validamos que el request sea un array
      if (!is_array($request->all())) {
          return ['error' => 'request must be an array'];
      }

      // Creamos las reglas de validación
      $rules = [
        'fc_Nombre' => 'required',
        'email' => 'email',
        'password' => 'min:6',
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

        $perfil = TblCatPerfil::findOrFail($id);

        $user = TblOpeUsuario::findOrFail($id2);
        $user->fc_Nombre = $request->fc_Nombre;//1
        $user->fi_IdCatPerfil = $perfil->fi_IdCatPerfil;//4
        if(isset($request->fc_Sexo)) {
          $user->fc_Sexo = $request->fc_Sexo;//5
        }
        if(isset($request->password)) {
          $user->password = bcrypt($request->password);//6
        }
        if(isset($request->email)) {
          $user->email = $request->email;//7
        }
        if(isset($request->fb_UsuarioLocal)) {
          $user->fb_UsuarioLocal = $request->fb_UsuarioLocal;//8
        }
        if(isset($request->fi_IdUsuarioFacebook)) {
          $user->fi_IdUsuarioFacebook = $request->fi_IdUsuarioFacebook;//9
        }
        if(isset($request->fc_UserName)) {
          $user->fc_UserName = $request->fc_UserName;//10
        }
        if(isset($request->fc_UrlImagen)) {
          $user->fc_UrlImagen = $request->fc_UrlImagen;//11
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
    public function destroy($id,$id2)
    {
      $user = TblOpeUsuario::findOrFail($id2);
      $user->delete();
      return ['deleted' => true];
    }

    public function login(Request $request)
    {
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

        $rules = [
          'email' => 'required|email',
          'password' => 'required|min:6',
        ];

        try {

          $validator = \Validator::make($request->all(),$rules);
          if ($validator->fails()) {
            return[
              'login' => false,
              'errors' => $validator->errors()->all()
            ];
          }


          // si el usuario no existe mandamos mensaje de error
          if(!Auth::attempt($request->only(['email','password']))) {
              return[
                'login' => false,
                'errors' => 'No encontramos al usuario'
              ];
          }
          // en caso contrario significa que el usuario existe y mandamos a home
          $user = Auth::user();
          return[
            'login' => true,
            'usuario' => $user
          ];
        } catch (Exception $e) {
          \Log::info('Error login TblOpeUsuario: '.$e);
          return \Response::json(['login' => 'false'],500);

        }
    }

    public function loginFacebook(request $request)
    {
      if (!is_array($request->all())) {
          return ['error' => 'request must be an array'];
      }

      $rules = [
        'fi_IdUsuarioFacebook' => 'required',
      ];
      try {

        $validator = \Validator::make($request->all(),$rules);
        if ($validator->fails()) {
          return[
            'login' => false,
            'errors' => $validator->errors()->all()
          ];
        }

        $user = TblOpeUsuario::where('fi_IdUsuarioFacebook',$request->fi_IdUsuarioFacebook)->get();

        if(count($user)>0){

          return[
            'login' => true,
            'usuario' => $user
          ];
        }
        else{
          return[
            'login' => false,
            'errors' => 'No encontramos al usuario'
          ];

        }

      } catch (Exception $e) {
        \Log::info('Error login TblOpeUsuario: '.$e);
        return \Response::json(['login' => 'false'],500);

      }

    }
}
