<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatTelefono
 */
class TblCatTelefono extends Model
{
    protected $table = 'tblCat_Telefono';

    protected $primaryKey = 'fi_IdCatTelefono';

	public $timestamps = false;

    protected $fillable = [
        'fc_NumTelefono',
        'fc_TipoTelefono',
        'fb_Activo'
    ];

    protected $guarded = [];

        
}