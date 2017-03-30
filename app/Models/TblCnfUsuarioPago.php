<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCnfUsuarioPago
 */
class TblCnfUsuarioPago extends Model
{
    protected $table = 'tblCnf_UsuarioPagos';

    protected $primaryKey = 'fi_IdUsuarioPagos';

	public $timestamps = false;

    protected $fillable = [
        'fd_FechaInicio',
        'fd_FechaFin',
        'fi_DescargasUtilizadas',
        'fi_IdOpeUsuario',
        'fi_IdCatTipoLicencia'
    ];

    protected $guarded = [];

        
}