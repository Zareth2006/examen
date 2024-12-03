<?php

namespace App\services;
use App\Models\Categoria;

class CategoriaService
{
    public function getCategoria()
    {
        return Categoria::all();
    }
}
?>