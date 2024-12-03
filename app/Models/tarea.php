<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    public function categoria() {
        return $this->belongsTo(categoria::class);
    }

}
