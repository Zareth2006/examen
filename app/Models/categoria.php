<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public function tareas() {
        return $this->hasMany(tarea::class);
    }
    protected $fillable = [ 'nombre' ];
}
