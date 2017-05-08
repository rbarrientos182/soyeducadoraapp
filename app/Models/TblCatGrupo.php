<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatGrupo
 */
class TblCatGrupo extends Model
{
    protected $table = 'tblCat_Grupos';

    protected $primaryKey = 'fi_IdCatGrupo';

	public $timestamps = false;

    protected $fillable = [
        'fc_Grado',
        'fc_Grupo',
        'fb_Activo',
        'fc_CicloEscolar',
        'fi_IdOpeUsuario',
        'fi_IdCatEscuela'
    ];

    protected $guarded = [];

    public function tblCat_ContextoPropio()
    {
      return $this->hasMany(TblCatContextoPropio::class,'fi_IdCatGrupo');
    }

    public function tblCat_Alumnos()
    {
      return $this->belongsToMany(TblCatAlumno::class,'tblCnf_AlumnoGrupo','fi_IdCatGrupo','fi_IdCatAlumno')->withPivot('fc_CicloEscolar');
    }

    public function tblOpe_NotaGrupal()
    {
      return $this->hasMany(TblOpeNotaGrupal::class,'fi_IdCatGrupo');
    }

    public function tbl_Ope_Usuario()
    {
      return $this->belongsTo(TblOpeUsuario::class);
    }

    public function tblCat_Escuelas()
    {
      return $this->belongsTo(TblCatEscuela::class,'fi_IdCatEscuela','fi_IdCatEscuela');
    }

}
