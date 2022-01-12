<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index(){


        return view('posts',[
            "title"=>"All Post",
            "homes"=> Home::all(),
            "posts"=> Post::latest()->filter(request(['search','category']))->get()
    
        ]);
    }
    public function show(Post $post)
    {
        
        return view('post',[
            "post"=>$post,
            "homes"=> Home::all()
        ]);
    }
    public function post()
    {
        return view('post',[
            "post"=>Post::latest()->get(),
            "homes"=> Home::all()
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
}
