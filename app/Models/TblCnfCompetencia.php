<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfCompetencium
 */
class TblCnfCompetencia extends Model
{
    protected $table = 'tblCnf_Competencia';

    protected $primaryKey = 'fi_IdCnfCompetencia';

	public $timestamps = false;

    protected $fillable = [
        'fc_Competencia',
        'fb_Activo',
        'fi_IdCnfCampoFormativo'
    ];

    protected $guarded = [];


}
