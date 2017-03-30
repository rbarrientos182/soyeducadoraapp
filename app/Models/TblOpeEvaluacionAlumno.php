<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeEvaluacionAlumno
 */
class TblOpeEvaluacionAlumno extends Model
{
    protected $table = 'tblOpe_EvaluacionAlumno';

    protected $primaryKey = 'fi_IdOpeEvaluacionAlumno';

	public $timestamps = false;

    protected $fillable = [
        'fi_Respuesta',
        'fi_IdCatEvaluacionPropia',
        'fi_IdCatEvaluacion',
        'fi_IdCnfAlumnoGrupo'
    ];

    protected $guarded = [];

        
}