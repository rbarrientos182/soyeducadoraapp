<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatSectorEscolar
 */
class TblCatSectorEscolar extends Model
{
    protected $table = 'tblCat_SectorEscolar';

    protected $primaryKey = 'fi_IdCatSectorEscolar';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreSector',
        'fb_Activo'
    ];

    protected $guarded = [];

        
}