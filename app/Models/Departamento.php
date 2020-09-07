<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'tmp_departamentos';

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function localidades()
    {
        return $this->hasMany(Localidad::class);
    }
}
