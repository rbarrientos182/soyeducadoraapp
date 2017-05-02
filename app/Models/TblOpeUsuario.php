<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class TblOpeUsuario
 */
class TblOpeUsuario extends Model
{
    protected $table = 'tblOpe_Usuario';

    protected $primaryKey = 'fi_IdOpeUsuario';

	  public $timestamps = false;

    protected $fillable = [
        'fc_Nombre',
        'fc_ApPaterno',
        'fc_ApMaterno',
        'fi_IdCatPerfil',
        'fc_Sexo',
        'fc_Password',
        'fc_Correo',
        'fb_UsuarioLocal',
        'fi_IdUsuarioFacebook',
        'fc_UserName',
        'fc_UrlImagen',
        'remember_token'
    ];

    protected $guarded = [];

    //protected $hidden = ['fc_Password', 'remember_token'];

    public function tblCat_Perfil()
    {
      return $this->belongsTo(TblCatPerfil::class);
    }
}
