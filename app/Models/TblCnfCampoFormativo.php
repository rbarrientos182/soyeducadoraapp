<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfCampoFormativo
 */
class TblCnfCampoFormativo extends Model
{
    protected $table = 'tblCnf_CampoFormativo';

    protected $primaryKey = 'fi_IdCnfCampoFormativo';

	public $timestamps = false;

    protected $fillable = [
        'fc_CampoFormativo',
        'fb_Activo',
        'fi_IdCnfModeloEducativo'
    ];

    protected $guarded = [];

        
}