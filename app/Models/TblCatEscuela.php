<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatEscuela
 */
class TblCatEscuela extends Model
{
    protected $table = 'tblCat_Escuela';

    protected $primaryKey = 'fi_IdCatEscuela';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombreEscuela',
        'fc_Direccion',
        'fi_IdOpeUsuario'
    ];

    protected $guarded = [];

        
}