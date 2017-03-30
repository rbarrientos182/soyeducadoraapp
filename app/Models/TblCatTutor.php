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

    public function tblCnf_AlumnosTutores()
    {
       return $this->hasMany(TblCnfAlumnoTutor::class,'fi_IdCatTutores');
    }

    public function tblCnf_TelefonoTutor()
    {
       return $this->hasMany(tblCnf_TelefonoTutor::class,'fi_IdCatTutores');
    }


}
