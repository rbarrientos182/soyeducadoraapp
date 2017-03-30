<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfTelefonoUsuario
 */
class TblCnfTelefonoUsuario extends Model
{
    protected $table = 'tblCnf_TelefonoUsuario';

    protected $primaryKey = 'fi_IdCnfTelefonoUsuario';

	public $timestamps = false;

    protected $fillable = [
        'fi_IdOpeUsuario',
        'fi_IdCatTelefono'
    ];

    protected $guarded = [];

        
}