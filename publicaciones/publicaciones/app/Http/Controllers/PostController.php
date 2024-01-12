<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function store(Request $request){
        //Validar la peticion que llega
        //Validar que es body es requerido
        $request -> validate(['body' => 'required']);
        //Realiza el guardado en Base de datos
        $request->user()->posts()->create($request->only('body'));
        //Devuelve a la misma pagina 
       return back()->with('status','publicacion guardada correctamente');
    }

    public function destroy(){
        //eliminar
     }
}
