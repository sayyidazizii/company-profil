<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        return view('contact',[
            "contacts"=> Contact::all(),
            "homes"=> Home::all()
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
    public function footer(){
        return view('main',[
            "footers"=>Contact::all(),
        ]);
    }
}
