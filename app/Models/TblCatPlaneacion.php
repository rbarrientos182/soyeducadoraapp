<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatPlaneacion
 */
class TblCatPlaneacion extends Model
{
    protected $table = 'tblCat_Planeacion';

    protected $primaryKey = 'fi_IdCatPlaneacion';

	public $timestamps = false;

    protected $fillable = [
        'fc_NombrePlaneacion',
        'fb_Activo',
        'fi_NumLiberacion',
        'fc_UrlArchivo',
        'fi_IdCnfCompetencia',
        'fc_UrlPortada'
    ];

    protected $guarded = [];

        
}