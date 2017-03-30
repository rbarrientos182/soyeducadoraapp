<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatContexto
 */
class TblCatContexto extends Model
{
    protected $table = 'tblCat_Contexto';

    protected $primaryKey = 'fi_IdCat_Contexto';

	public $timestamps = false;

    protected $fillable = [
        'fc_Contexto',
        'fi_IdCatPlaneacion'
    ];

    protected $guarded = [];

        
}