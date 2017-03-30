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

        
}