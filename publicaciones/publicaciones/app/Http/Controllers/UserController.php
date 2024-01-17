<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user){
        return view('users.show',[
            'posts' => $user->posts()->latest()->paginate()
        ]);
    }
}
