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

        
}