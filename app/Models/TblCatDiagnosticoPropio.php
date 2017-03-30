<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatDiagnosticoPropio
 */
class TblCatDiagnosticoPropio extends Model
{
    protected $table = 'tblCat_DiagnosticoPropio';

    protected $primaryKey = 'fi_IdCatDiagnosticoPropio';

	public $timestamps = false;

    protected $fillable = [
        'fi_NumeroPregunta',
        'fc_Pregunta'
    ];

    protected $guarded = [];

        
}