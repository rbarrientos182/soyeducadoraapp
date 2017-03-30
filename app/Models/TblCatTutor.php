<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatTutore
 */
class TblCatTutor extends Model
{
    protected $table = 'tblCat_Tutores';

    protected $primaryKey = 'fi_IdCatTutores';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreTutor',
        'fi_Edad',
        'fc_Ocupacion',
        'fc_Parentesco',
        'fb_Activo'
    ];

    protected $guarded = [];


}
