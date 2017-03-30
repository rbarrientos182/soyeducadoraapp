<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfAlumnoTutor
 */
class TblCnfAlumnoTutor extends Model
{
    protected $table = 'tblCnf_AlumnosTutores';

    protected $primaryKey = 'fi_IdCnfAlumnosTutores';

	public $timestamps = false;

    protected $fillable = [
        'fi_IdCatTutores',
        'fi_IdCatAlumno'
    ];

    protected $guarded = [];


}
