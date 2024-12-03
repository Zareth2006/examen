<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CATEGORIA</title>
</head>
<body>
    <a href="{{route('home')}}">   
        <section>
            <h2>Crear categoria</h2>
        </section>     
            
    </a>
    <form action="{{route('add_categoria')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre Categoria">
        <input type="submit" value="Crear Categoria">
    </form>
    <h2>list Categoria</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->Nombre}}</td>
                    <td>
                        <a href="{{route('editar_categoria.view', $categoria->id)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('eliminar_categoria', $categoria->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
    
</body>
</html>