<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeDiagnosticoAlumno
 */
class TblOpeDiagnosticoAlumno extends Model
{
    protected $table = 'tblOpe_DiagnosticoAlumno';

    protected $primaryKey = 'fi_IdOpeDiagnosticoAlumno';

	public $timestamps = false;

    protected $fillable = [
        'fi_Respuesta',
        'fi_IdCatDiagnosticoPropio',
        'fi_IdCatDiagnostico',
        'fi_IdCnfAlumnoGrupo'
    ];

    protected $guarded = [];

        
}