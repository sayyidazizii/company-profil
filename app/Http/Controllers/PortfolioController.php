<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index(){
        return view('portfolio',[
            "title"=>"Portfolio",
            "homes"=> Home::all(),
            "portfolios"=>Portfolio::all()
        ]);
    }
    public function show(Portfolio $portfolio)
    {
        
        return view('portfolio',[
            "portfolio"=>$portfolio
        ]);
    }
    public function icon(){
        return view('nav',[
            "homes"=> Home::all()
        ]);
    }
}
