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
       return $request->all();
    }

    public function destroy(){
        //eliminar
     }
}
