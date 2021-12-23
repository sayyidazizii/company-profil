<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class AboutController extends Controller
{

    public function index(){
        return view('about',[
            "title"=>"About",
            "abouts"=>About::all()
        ]);
    }
    public function show(About $about)
    {
        
        return view('about',[
            "about"=>$about
        ]);
    }
}
