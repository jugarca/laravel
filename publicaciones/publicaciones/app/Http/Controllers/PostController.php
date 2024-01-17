<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //TODO: 'posts' => Post::latest()->paginate()
    //      SELECT * FROM POSTS ORDER BY ID DESC; Despues lo pagina el sistema
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function store(Request $request){
        //Validar la peticion que llega
        //Validar que es body es requerido
        $request -> validate(['body' => 'required']);
        
        //Realiza el guardado en Base de datos

        //dd(['body'=>$request->body]);

        $request->user()->posts()->create($request->only('body'));

        //Devuelve a la misma pagina 
       return back()->with('status','publicacion guardada correctamente');
    }

    public function destroy(Request $request, Post $post){
        //dd($request->user()->id);
        /*if($request->user()->id !== $post->user_id){
            abort(403);
        }*/
        //En caso de que devuelva true continua y en caso de que devuelva false da un error controlado
        $this->authorize('destroy-posts',$post);

        $post->delete();
        return back();
     }
}
