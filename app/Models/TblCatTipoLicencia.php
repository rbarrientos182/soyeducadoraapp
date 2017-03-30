<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatTipoLicencium
 */
class TblCatTipoLicencia extends Model
{
    protected $table = 'tblCat_TipoLicencia';

    protected $primaryKey = 'fi_IdCatTipoLicencia';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreLicencia',
        'fb_Activo',
        'fi_DescargasDisponibles'
    ];

    protected $guarded = [];


}
