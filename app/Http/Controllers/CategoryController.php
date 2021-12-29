<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        return view('posts',[
            "title"=>"Category",
            "homes"=> Home::all(),
            "categorys"=>Category::all()
        ]);
    }
    public function show(Category $category)
    {
        
        return view('posts',[
            'title'=>$category->name,
            'posts'=>$category->posts,
            'category'=>$category->name,
            "homes"=> Home::all()
        ]);
    }
    public function icon(){
        return view('layout.nav',[
            "homes"=> Home::all()
        ]);
    }
}
