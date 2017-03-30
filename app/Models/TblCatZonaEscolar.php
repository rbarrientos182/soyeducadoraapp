<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatZonaEscolar
 */
class TblCatZonaEscolar extends Model
{
    protected $table = 'tblCat_ZonaEscolar';

    protected $primaryKey = 'fi_IdCatZonaEscolar';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreZonaEscolar',
        'fb_Activo',
        'fi_IdCatSectorEscolar'
    ];

    protected $guarded = [];

        
}