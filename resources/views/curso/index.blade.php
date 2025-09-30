<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Listar cursos</h1>

    @foreach ($cursos as $curso)
    <tr>
        <br>
        <td>{{$curso->name}}</td><br>
        <td>{{$curso->descripcion}}</td><br>
        <td>{{$curso->urlPdf}}</td><br>
        <td> <iframe src="{{ 'http://localhost/larav3066446/public/storage/public/images/'.$curso->urlPdf }}"  frameborder="0"></iframe></td>
        <td><a href="{{route('curso.show',$curso->id)}}">Mostrar</a></td>
        <td><a href="{{route('curso.edit',$curso->id)}}">Editar</a></td>
         <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
            @csrf
            @method('delete')
          <button type="submit">Eliminar</button>
        </form>



        <br>


    </tr>
@endforeach

</body>
</html>
