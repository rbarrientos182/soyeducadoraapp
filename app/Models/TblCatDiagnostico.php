<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatDiagnostico
 */
class TblCatDiagnostico extends Model
{
    protected $table = 'tblCat_Diagnostico';

    protected $primaryKey = 'fi_IdCatDiagnostico';

	public $timestamps = false;

    protected $fillable = [
        'fi_NumeroPregunta',
        'fc_Pregunta'
    ];

    protected $guarded = [];

        
}