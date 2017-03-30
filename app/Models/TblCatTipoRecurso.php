<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatTipoRecurso
 */
class TblCatTipoRecurso extends Model
{
    protected $table = 'tblCat_TipoRecurso';

    protected $primaryKey = 'fi_IdCatTipoRecurso';

	public $timestamps = false;

    protected $fillable = [
        'fc_TipoRecurso',
        'fb_Activo'
    ];

    protected $guarded = [];

        
}