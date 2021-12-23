<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        return view('blog',[
            "homes"=> Home::all(),
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
}
