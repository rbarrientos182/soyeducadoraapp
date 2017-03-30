<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpePruebaEdiAlumno
 */
class TblOpePruebaEdiAlumno extends Model
{
    protected $table = 'tblOpe_PruebaEdiAlumno';

    protected $primaryKey = 'fi_IdOpePruebaEdiAlumno';

	public $timestamps = false;

    protected $fillable = [
        'fi_Respuesta',
        'fi_IdCatPruebaEdi',
        'fi_IdCnfAlumnoGrupo'
    ];

    protected $guarded = [];

        
}