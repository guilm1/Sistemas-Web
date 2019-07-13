<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
  protected $fillable = [
      'cliente_id', 'tipo_id', 'data', 'valor', 'credito'
    ];

    public function cliente(){
      return $this->belongsTo('App\Clientes');
    }

    public function tipo(){
      return $this->belongsTo('App\Tipos');
    }



}
