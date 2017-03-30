<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpePlaneacionUsuario
 */
class TblOpePlaneacionUsuario extends Model
{
    protected $table = 'tblOpe_PlaneacionUsuario';

    protected $primaryKey = 'fi_IdOpePlaneacionUsuario';

	public $timestamps = false;

    protected $fillable = [
        'fd_FechaDesde',
        'fd_FechaHasta',
        'fb_Finalizada',
        'fi_IdCatPlaneacion',
        'fi_IdOpeUsuario'
    ];

    protected $guarded = [];

        
}