<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\TareaService;
use App\Services\CategoriaService;
use App\Models\tarea;

class TareaController extends Controller
{
    public function index(TareaService $tarea, CategoriaService $categoria)
    {
        $categorias = $categoria->getCategoria();
        $tareas = $tarea->getTarea();
        
        return view('home', compact('tarea', 'categoria'));

    }
    public function createTarea(Request $request)
    {
        $validate = $request->validate([
            'title' =>'required|string|max:255',
            'description' => 'required',
            'id_categoria' => 'required',
            'completed' => 'required|boolean'
            
        ]);
        Tarea::created($validate);
        return redirect()->route('home')->with('status', 'Tarea creada correctamente');

    }

    public function updateTarea(Request $request, $id)
    {
        $validate = $request->validate ([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'id_categoria' => 'required',
            'completed' => 'required|boolean'
        ]);

        Tarea::where('id', $request->id)->update($validate);
        return redirect()->route('home')->with('status', 'Tarea actualizada correctamente');
    }


    public function updateTareaView($id)
    {
        $tareas = Producto::find($id);
        return view('editar_tarea_view', compact('tareas'));
    }

    public function deleteTarea($id)
    {
        Task::destroy($id);
    }
}


