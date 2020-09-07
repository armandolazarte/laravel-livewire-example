<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'tmp_localidades';

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
