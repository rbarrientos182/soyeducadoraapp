<?php

namespace SoyEducadora\Models;

use Illuminate\Database\Eloquent\Model;

class Ope_Usuario extends Model
{
    protected $table = 'tblOpe_Usuario';
    protected $primaryKey = 'fi_IdOpeUsuario';
    public $timestamps = false;

    protected $fillable = [
        'fc_Nombre','fc_ApPaterno','fc_Sexo',
    ];

    public function tblCat_Perfil()
    {
      return $this->belongsTo(Cat_Perfil::class);
    }
}
