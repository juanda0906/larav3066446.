@extends('layouts.app')

@section('content')

    <h1>Crear Curso</h1>

    <form action="{{ route('curso.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            descripcion:
            <br>
            <input type="text" name="descripcion">
        </label>

        <br><br>
        <label>Adjuntar archivo PDF</label>
        <br>
        <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">

        <br><br>
        <button type="submit">Registrar Curso</button>
    </form>


@endsection

