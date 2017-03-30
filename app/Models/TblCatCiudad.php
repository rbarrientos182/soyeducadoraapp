<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatCiudad
 */
class TblCatCiudad extends Model
{
    protected $table = 'tblCat_Ciudad';

    protected $primaryKey = 'fi_IdCatCiudad';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreCiudad',
        'fi_IdCatEstado'
    ];

    protected $guarded = [];

        
}