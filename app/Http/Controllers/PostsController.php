<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\barang;

class PostsController extends Controller
{
    public function menampilkan(){
        
        $post = Posts::all();
        return view('tampil_post', compact('post'));
    }

    public function menampilkan2(){
        
        $barangs = barang::all();
        return view('tampil_barang', compact('barangs'));
    }
}
