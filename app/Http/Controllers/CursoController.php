<?php

namespace App\Http\Controllers;

use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index', compact('cursos'));
    }

    //desplegar el formulario
    public function create()
    {
        return view('curso.create');
    }

    public function store(Request $request)
    {


        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;

        //ADJUNTAR EL PDF
         $file=$request->file("urlPdf");

         $nombreArchivo = "pdf_".time().".".$file->guessExtension();

         //guardado del archivo
         $request->file('urlPdf')->storeAs('public/images', $nombreArchivo );

         $curso->urlPdf = $nombreArchivo;
         $curso->save();
        return redirect()->route('curso.index');
    }


    public function show(Curso $curso)
    { //encontrar el curso por el ID

        return view('cursos.show', compact('curso'));
    }

    //Destroy
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('curso.index');
    }

    public function edit(Curso $curso)
    { //Encuentro el Curso

        return view('cursos.edit', compact('curso'));
    }

    //Update
    public function update(Request $request, Curso $curso)
    {

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();

        return redirect()->route('curso.index');
    }
}
