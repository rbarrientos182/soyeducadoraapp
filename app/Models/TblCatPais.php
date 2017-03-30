<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatPais
 */
class TblCatPais extends Model
{
    protected $table = 'tblCat_Pais';

    protected $primaryKey = 'fi_IdCatPais';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombrePais',
        'fb_Activo'
    ];

    protected $guarded = [];


}
