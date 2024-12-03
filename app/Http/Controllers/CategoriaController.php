<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categoria', compact('categorias'));
    }
    public function createCategoria(Request $request)
    {
        $validate = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);
        Categoria::create($validate);
        return redirect()->route('categoria')->with('status', 'Categoría creada con éxito');
    }

    public function updateCategoria(Request $request, $id) {
        $validate = $request->validate([
            'nombre' =>'required|string|max:255',
        ]);
        Categoria::where('id', $id)->update($validate);
        return redirect()->route('categoria')->with('status', 'categoria modificada con exito');
    }

    public function updateCategoriaView($id)
    {
       $categoria = Categoria::find($id);
       return view('editar_categoria', compact('categoria'));
        
    }

    public function deleteCategoria($id)
    {
        Categoria::destroy($id);
        return redirect()->route('categoria')->with('status', 'Categoría eliminada con éxito');
    }
}
