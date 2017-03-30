<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpeRecurso
 */
class TblOpeRecurso extends Model
{
    protected $table = 'tblOpe_Recursos';

    protected $primaryKey = 'fi_IdOpeRecursos';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreRecurso',
        'fc_UrlRecurso',
        'fb_Activo',
        'fi_IdCatTipoRecurso'
    ];

    protected $guarded = [];

        
}