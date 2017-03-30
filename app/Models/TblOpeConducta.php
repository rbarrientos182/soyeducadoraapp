<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeConductum
 */
class TblOpeConducta extends Model
{
    protected $table = 'tblOpe_Conducta';

    protected $primaryKey = 'fi_IdOpeConducta';

	public $timestamps = false;

    protected $fillable = [
        'fd_Fecha',
        'fi_IdOpeUsuario',
        'fi_IdCnfConducta',
        'fi_IdCnfAlumnoGrupo'
    ];

    protected $guarded = [];


}
