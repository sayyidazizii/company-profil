<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('portfolio',[
            "title"=>"Portfolio",
            "portfolios"=>Portfolio::all()
        ]);
    }
    public function show(Portfolio $portfolio)
    {
        
        return view('portfolio',[
            "portfolio"=>$portfolio
        ]);
    }
}
