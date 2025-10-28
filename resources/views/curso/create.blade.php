@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">Crea nuevos Cursos</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('curso.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre del curso</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Registra" required>
                </div>

              
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Describe curso" required></textarea>
                </div>

              
                <div class="mb-3">
                    <label for="urlPdf" class="form-label fw-bold">Adjuntar archivo PDF</label>
                    <input type="file" name="urlPdf" id="urlPdf" class="form-control" accept=".pdf">
                    <small class="form-text text-muted">Solo se permiten archivos en formato PDF.</small>
                </div>

              
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-5 py-2">
                        <i class="bi bi-upload"></i> Registrar Curso
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
