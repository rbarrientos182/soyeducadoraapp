<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeAsistencium
 */
class TblOpeAsistencia extends Model
{
    protected $table = 'tblOpe_Asistencia';

    protected $primaryKey = 'fi_IdOpeAsistencia';

	public $timestamps = false;

    protected $fillable = [
        'fd_Fecha',
        'fb_Asistio',
        'fi_IdOpeUsuario',
        'fi_IdCnfAlumnoGrupo'
    ];

    protected $guarded = [];


}
