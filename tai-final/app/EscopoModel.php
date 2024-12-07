<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscopoModel extends Model
{
    protected $table = "escopos";

    public function assuntos()
    {
        return $this->hasMany('App\AssuntoModel', 'escopo_id');
    }
}
