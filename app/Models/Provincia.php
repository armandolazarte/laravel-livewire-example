<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'tmp_provincias';

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
