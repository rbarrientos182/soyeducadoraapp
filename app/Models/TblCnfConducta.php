<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfConductum
 */
class TblCnfConducta extends Model
{
    protected $table = 'tblCnfConducta';

    protected $primaryKey = 'fi_IdCnfConducta';

	public $timestamps = false;

    protected $fillable = [
        'fc_Descripcion',
        'fi_Valor',
        'fb_Activo'
    ];

    protected $guarded = [];


}
