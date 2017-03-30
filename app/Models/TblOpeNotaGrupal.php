<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeNotaGrupal
 */
class TblOpeNotaGrupal extends Model
{
    protected $table = 'tblOpe_NotaGrupal';

    protected $primaryKey = 'fi_IdOpeNotaGrupal';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreAviso',
        'fc_Asunto',
        'fd_FechaHora',
        'fb_Activo',
        'fi_IdOpeUsuario',
        'fi_IdCatGrupo',
        'fb_EsJuntaPadres'
    ];

    protected $guarded = [];

        
}