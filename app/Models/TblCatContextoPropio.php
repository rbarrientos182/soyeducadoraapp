<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatContextoPropio
 */
class TblCatContextoPropio extends Model
{
    protected $table = 'tblCat_ContextoPropio';

    protected $primaryKey = 'fi_IdCatContextoPropio';

	public $timestamps = false;

    protected $fillable = [
        'fc_Contexto',
        'fi_IdOpePlaneacionUsuario',
        'fi_IdCatGrupo'
    ];

    protected $guarded = [];

        
}