<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatSistemaEscolar
 */
class TblCatSistemaEscolar extends Model
{
    protected $table = 'tblCat_SistemaEscolar';

    protected $primaryKey = 'fi_IdCatSistemaEscolar';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreSistemaEscolar',
        'fb_Activo'
    ];

    protected $guarded = [];

        
}