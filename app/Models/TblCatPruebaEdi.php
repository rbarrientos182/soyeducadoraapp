<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatPruebaEdi
 */
class TblCatPruebaEdi extends Model
{
    protected $table = 'tblCat_PruebaEdi';

    protected $primaryKey = 'fi_IdCatPruebaEdi';

	public $timestamps = false;

    protected $fillable = [
        'fi_NumeroPregunta',
        'fc_Pregunta'
    ];

    protected $guarded = [];

        
}