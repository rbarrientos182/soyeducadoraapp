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

    public function tblCnf_TelefonoEscuela()
    {
      return $this->hasMany(TblCnfTelefonoEscuela::class,'fi_IdCatEscuela');
    }

    public function tblCat_Grupos()
    {
      return $this->hasmany(TblCatGrupo::class,'fi_IdCatEscuela');
    }

    public function tblOpe_Usuario()
    {
      return $this->belongsTo(TblOpeUsuario::class);
    }




}
