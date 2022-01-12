<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        return view('gallery',[
            "title"=>"Gallery",
            "homes"=> Home::all(),
            "gallerys"=>Gallery::latest()->get()
        ]);
    }
    public function show(Gallery $gallery)
    {
        
        return view('gallery',[
            "gallery"=>$gallery
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
}
