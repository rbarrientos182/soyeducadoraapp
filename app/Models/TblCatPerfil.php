<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCatPerfil
 */
class TblCatPerfil extends Model
{
    protected $table = 'tblCat_Perfil';

    protected $primaryKey = 'fi_IdCatPerfil';

	  public $timestamps = false;

    protected $fillable = [
        'fc_NombrePerfil',
        'fb_Activo'
    ];

    protected $guarded = [];

    public function tblOpe_Usuario()
    {
      return $this->hasMany(TblOpeUsuario::class,'fi_IdCatPerfil');
    }


}
