<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleGuia extends Model
{
    public $timestamps = false;
    protected $table='ctdetgu';
    protected $fillable=['ctdetgu_nro','ctdetgu_serie',
    'ctdetgu_prove_code','ctdetgu_produc_id','ctdetgu_code',
    'ctdetgu_desc','ctdetgu_cantidad','ctdetgu_undmd_code',
    'ctdetgu_fecha_reg','ctdetgu_fecha_act','ctdetgu_usuario',
    'ctdetgu_indice','ctdetgu_serieProduc'];
  

}
