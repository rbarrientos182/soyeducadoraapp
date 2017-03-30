<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeNotaIndividual
 */
class TblOpeNotaIndividual extends Model
{
    protected $table = 'tblOpe_NotaIndividual';

    protected $primaryKey = 'fi_IdOpe_NotaIndividual';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreAviso',
        'fc_Asunto',
        'fd_FechaHora',
        'fb_Activo',
        'fi_IdOpeUsuario',
        'fi_IdCnfAlumnoGrupo'
    ];

    protected $guarded = [];

        
}