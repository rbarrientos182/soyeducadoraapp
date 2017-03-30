<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfTelefonoEscuela
 */
class TblCnfTelefonoEscuela extends Model
{
    protected $table = 'tblCnf_TelefonoEscuela';

    protected $primaryKey = 'fi_IdCnfTelefonoEscuela';

	public $timestamps = false;

    protected $fillable = [
        'fi_IdCatTelefono',
        'fi_IdCatEscuela'
    ];

    protected $guarded = [];

        
}