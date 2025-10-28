@extends('layouts.app')

@section('content')

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


@endsection
