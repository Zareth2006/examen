<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <article>
        <a href="{{route('categoria')}}">
            <section>
                <h2>Create Category</h2>
            </section>
        </a>
        
    </article>

    <form action="{{route('add_tarea')}}" method="post">
        <input type="text" name="title" placeholder="title tarea" required>
        <input type="text" name="boolean" placeholder="completed/no" required>
        <select name="" id="">
            <option value="" disabled >Select Category</option>
            @foreach ($categoria as $categorias)
                <option value="{{$categorias->id}}" disabled>{{$categorias->nombre}}</option>
            @endforeach
        </select>
        <textarea 
        name="description" id="" cols="30" rows="10" placeholder="description tarea" required>

        </textarea>
        <input type="submit" value="Add tarea">
    </form>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre tarea</th>
            <th>Descripcion tarea</th>
            <th colspan="2">ACTIONS</th>
        </thead>
        <tbody>
            @foreach ($tarea as $tareas)
                <tr>
                    <th>{{$tareas->id}}</th>
                    <th>{{$tareas->title}}</th>
                    <th>{{$tareas->description}}</th>
                    <th>{{$tareas->created_at->format('Y-m-d-H:i:s')}}</th>
                    <td>
                        <a href="{{route('editar_tarea', $tareas->id)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('eliminar_tarea', $tareas->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    
</body>
</html>