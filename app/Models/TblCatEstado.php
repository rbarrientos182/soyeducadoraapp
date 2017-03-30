<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatEstado
 */
class TblCatEstado extends Model
{
    protected $table = 'tblCat_Estado';

    protected $primaryKey = 'fi_IdCatEstado';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreEstado'
    ];

    protected $guarded = [];

        
}