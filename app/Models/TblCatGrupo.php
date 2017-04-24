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

    public function tblCnf_AlumnoGrupo()
    {
      return $this->hasMany(TblCnfAlumnoGrupo::class,'fi_IdCatGrupo');
    }

    public function tblOpe_NotaGrupal()
    {
      return $this->hasMany(TblOpeNotaGrupal::class,'fi_IdCatGrupo');
    }

    public function tblCnf_AlumnoGrupo()
    {
      return $this->hasMany(TblCnfAlumnoGrupo::class,'fi_IdCatGrupo');
    }

    public function tbl_Ope_Usuario()
    {
      return $this->belongsTo(TblOpeUsuario::class);
    }

    public function tblCat_Escuela()
    {
      return $this->belongsTo(TblCatEscuela::class);
    }

}
