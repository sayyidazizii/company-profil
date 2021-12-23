<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            // "posts"=> Post::all()
            "homes"=> Home::all(),
            "posts"=> Post::latest()->get()
    
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
    public function show(Post $post)
    {
        
        return view('home',[
            "post"=>$post
        ]);
    }
}
