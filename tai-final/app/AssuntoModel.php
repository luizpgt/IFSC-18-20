<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssuntoModel extends Model
{
    protected $table = "assuntos";

    public function escopos()
    {
        return $this->belongsTo(EscopoModel::class, 'escopo_id');
    }
}
