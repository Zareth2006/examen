<?php

namespace App\services;
use App\Models\tarea;

class TareaService
{
    public function gettarea()
    {
        return tarea::all();
    }
}
?>