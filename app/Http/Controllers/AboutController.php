<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{

    public function index(){
        return view('about',[
            "title"=>"About",
            "homes"=> Home::all(),
            "abouts"=>About::all()
        ]);
    }
    public function show(About $about)
    {
        
        return view('about',[
            "about"=>$about
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
}
