<?php
/**
 * @SWG\Info(title="API para soy educadora", version="1.0.0")
 */

namespace SoyEducadora\Http\Controllers\EndPoints;

use Illuminate\Http\Request;

use SoyEducadora\Http\Requests;
use SoyEducadora\Http\Controllers\Controller;
use SoyEducadora\Models\TblCatAlumno;
use SoyEducadora\Models\TblCnfAlumnoGrupo;
use SoyEducadora\Models\TblCatGrupo;

class CatAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $grupo = TblCatGrupo::findOrFail($id);

        if($grupo->tblCnf_AlumnoGrupo){
          $alumnogrupo = $grupo->tblCnf_AlumnoGrupo;
          if($alumnogrupo->tblCat_Alumnos)
          {
            $alumnos = $alumnogrupo->tblCat_Alumnos;
          }
        }
        else {
          $alumnos = "";
        }

        return compact('alumnos');
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
        'fi_IdCatGrupo' => 'required',
        'fc_CicloEscolar' => 'required',
        'fc_Nombre' => 'required',
        'fc_ApPaterno' => 'required',
        'fc_Sexo' => 'required||max:1',
        'fb_Activo' => 'required|boolean',
        'fd_FecNacimiento' => 'required|date',
        'fc_ContactoEmergencia' => 'required'
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

        $alumno = new TblCatAlumno;
        $alumno->fc_Nombre = $request->fc_Nombre;
        $alumno->fc_ApPaterno = $request->fc_ApPaterno;
        if (isset($request->fc_ApMaterno)) {
          $alumno->fc_ApMaterno = $request->fc_ApMaterno;
        }
        $alumno->fc_Sexo = $request->fc_Sexo;
        if (isset($request->Fotogradia)) {
          $alumno->Fotogradia = $request->Fotogradia;
        }
        $alumno->fb_Activo = $request->fb_Activo;
        $alumno->fc_FecNacimiento = $request->fc_FecNacimiento;
        $alumno->fc_ContactoEmergencia = $request->fc_ContactoEmergencia;
        $alumno->save();

        $alumnogrupo = new TblCnfAlumnoGrupo;
        $alumnogrupo->fc_CicloEscolar = $request->fc_CicloEscolar;
        $alumnogrupo->fi_IdCatGrupo = $request->fi_IdCatGrupo;
        $alumnogrupo->if_IdCatAlumno = $alumno->fi_IdCatAlumno;
        $alumnogrupo->save();

        //TblCatAlumno::create($request->all());
        return ['created'=> true];

      } catch (Exception $e) {
        \Log::info('Error creating TblCatAlumno: '.$e);
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
        return TblCatAlumno::findOrFail($id);
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
        'fc_Sexo' => 'required||max:1',
        'fb_Activo' => 'required|boolean',
        'fd_FecNacimiento' => 'required|date',
        'fc_ContactoEmergencia' => 'required'
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

        $alumno = TblCatAlumno::findOrFail($id);
        $alumno->fc_Nombre = $request->fc_Nombre;
        $alumno->fc_ApPaterno = $request->fc_ApPaterno;
        if (isset($request->fc_ApMaterno)) {
          $alumno->fc_ApMaterno = $request->fc_ApMaterno;
        }
        $alumno->fc_Sexo = $request->fc_Sexo;
        if (isset($request->Fotogradia)) {
          $alumno->Fotogradia = $request->Fotogradia;
        }
        $alumno->fb_Activo = $request->fb_Activo;
        $alumno->fc_FecNacimiento = $request->fc_FecNacimiento;
        $alumno->fc_ContactoEmergencia = $request->fc_ContactoEmergencia;
        $alumno->save();

        return ['updated' => true];

      } catch (Exception $e) {
        \Log::info('Error updating TblCatAlumno: '.$e);
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
      $alumno = TblCatAlumno::findOrFail($id);
      $alumno->delete();
      return ['deleted' => true];
    }
}
