<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfAlumnoGrupo
 */
class TblCnfAlumnoGrupo extends Model
{
    protected $table = 'tblCnf_AlumnoGrupo';

    protected $primaryKey = 'fi_IdCnfAlumnoGrupo';

	public $timestamps = false;

    protected $fillable = [
        'fc_CicloEscolar',
        'fi_IdCatGrupo',
        'fi_IdCatAlumno'
    ];

    protected $guarded = [];

    public function tblOpe_Asistencia()
    {
      return $this->hasMany(TblOpeAsistencia::class,'fi_IdCnfAlumnoGrupo');
    }

    public function tblOpe_Conducta()
    {
      return $this->hasMany(TblOpeConducta::class,'fi_IdCnfAlumnoGrupo');
    }

    public function tblOpe_NotaIndividual()
    {
      return $this->hasMany(TblOpeNotaIndividual::class,'fi_IdCnfAlumnoGrupo');
    }

    public function tblOpe_EvaluacionAlumno()
    {
      return $this->hasMany(TblOpeEvaluacionAlumno::class,'fi_IdCnfAlumnoGrupo');
    }

    public function tblOpe_PruebaEdiAlumno()
    {
      return $this->hasMany(TblOpePruebaEdiAlumno::class,'fi_IdCnfAlumnoGrupo');
    }

    public function tblOpe_DiagnosticoAlumno()
    {
      return $this->hasMany(TblOpeDiagnosticoAlumno::class,'fi_IdCnfAlumnoGrupo');
    }

    public function tblCat_Alumnos()
    {
      return $this->belongsTo(TblCatAlumno::class);
    }

    public function tblCat_Grupos()
    {
      return $this->belongsTo(TblCatGrupo::class);
    }

}
