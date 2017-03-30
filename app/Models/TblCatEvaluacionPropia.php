<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatEvaluacionPropium
 */
class TblCatEvaluacionPropia extends Model
{
    protected $table = 'tblCat_EvaluacionPropia';

    protected $primaryKey = 'fi_IdCatEvaluacionPropia';

	public $timestamps = false;

    protected $fillable = [
        'fi_NumeroPregunta',
        'fc_Pregunta',
        'fi_IdOpePlaneacionUsuario'
    ];

    protected $guarded = [];


}
