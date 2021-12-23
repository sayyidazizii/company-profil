<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            "title"=>"Company Blog",
            "posts"=> Post::all()
    
        ]);
    }
    public function show(Post $post)
    {
        
        return view('home',[
            "post"=>$post
        ]);
    }
}
