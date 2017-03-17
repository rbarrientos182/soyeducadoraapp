<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

class Cat_Perfil extends Model
{
  protected $table = 'tblCat_Perfil';
  protected $primaryKey = 'fi_IdCatPerfil';
  public $timestamps = false;

  protected $fillable = [
      'fc_NombrePerfil','fb_Activo',
  ];

  public function tblOpe_Usuario()
  {
    return $this->hasMany(Ope_Usuario::class,'fi_IdCatPerfil');
  }

}
