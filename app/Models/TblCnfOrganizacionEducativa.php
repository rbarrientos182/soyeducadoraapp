<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfOrganizacionEducativa
 */
class TblCnfOrganizacionEducativa extends Model
{
    protected $table = 'tblCnf_OrganizacionEducativa';

    protected $primaryKey = 'fi_IdCnfOrganizacionEducativa';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreSectorEscolar',
        'fc_NombreZonaEscolar',
        'fi_IdCatPais'
    ];

    protected $guarded = [];

        
}