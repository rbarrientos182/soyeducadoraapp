<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatAlumno
 */
class TblCatAlumno extends Model
{
    protected $table = 'tblCat_Alumnos';

    protected $primaryKey = 'fi_IdCatAlumno';

	  public $timestamps = false;

    protected $fillable = [
        'fc_Nombre',
        'fc_ApPaterno',
        'fc_ApMaterno',
        'fc_Sexo',
        'fc_Fotogradia',
        'fb_Activo',
        'fd_FecNacimiento',
        'fc_CURP',
        'fc_TipoSangre',
        'fc_FactorRH',
        'fc_CalleNumero',
        'fc_Colonia',
        'fc_CodigoPostal',
        'fi_IdCatCiudad',
        'fi_IdCatEstado',
        'fc_ContactoEmergencia'
    ];

    protected $guarded = [];

    public function tblCnf_AlumnosTutores()
    {
       return $this->hasMany(TblCnfAlumnoTutor::class,'fi_IdCatAlumno');
    }

    public function tblCat_Grupos()
    {
       return $this->belongsToMany(TblCatGrupo::class,'tblCnf_AlumnoGrupo','fi_IdCatGrupo','fi_IdCatAlumno')->withPivot('fc_CicloEscolar');
    }

    public function tblCat_Ciudad()
    {
       return $this->belongsTo(TblCatCiudad::class);
    }

    public function tblCat_Estado()
    {
       return $this->belongsTo(TblCatEstado::class);
    }

}
