<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatEvaluacion
 */
class TblCatEvaluacion extends Model
{
    protected $table = 'tblCat_Evaluacion';

    protected $primaryKey = 'fi_IdCatEvaluacion';

	public $timestamps = false;

    protected $fillable = [
        'fi_NumeroPregunta',
        'fc_Pregunta',
        'fi_IdCatPlaneacion'
    ];

    protected $guarded = [];

        
}