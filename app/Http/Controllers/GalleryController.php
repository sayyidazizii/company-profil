<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('gallery',[
            "title"=>"Gallery",
            "gallerys"=>Gallery::all()
        ]);
    }
    public function show(Gallery $gallery)
    {
        
        return view('gallery',[
            "gallery"=>$gallery
        ]);
    }
}
