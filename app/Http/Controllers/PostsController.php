<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function menampilkan(){
        
        $post = Posts::all();
        return view('tampil_post', compact('post'));
    }
}
