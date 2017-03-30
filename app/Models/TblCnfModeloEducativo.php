<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfModeloEducativo
 */
class TblCnfModeloEducativo extends Model
{
    protected $table = 'tblCnf_ModeloEducativo';

    protected $primaryKey = 'fi_IdCnfModeloEducativo';

	public $timestamps = false;

    protected $fillable = [
        'fc_ModeloEducativo',
        'fb_Activo'
    ];

    protected $guarded = [];

        
}