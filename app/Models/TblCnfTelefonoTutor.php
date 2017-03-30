<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfTelefonoTutor
 */
class TblCnfTelefonoTutor extends Model
{
    protected $table = 'tblCnf_TelefonoTutor';

    protected $primaryKey = 'fi_IdCnfTelefonoTutor';

	public $timestamps = false;

    protected $fillable = [
        'fi_IdCatTelefono',
        'fi_IdCatTutores'
    ];

    protected $guarded = [];

        
}