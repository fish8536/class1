<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $scoreList = [100, 98, 50, 90, 95];
        $userName = "Chien";
        $lines = "line1<br>line2<br>line3";
        $cityId = "4";
        $viewModel = compact(
            "scoreList", 
            "userName", 
            "lines", 
            "cityId");
        // dd($viewModel);
        return view("home.index", $viewModel);
    }

    public function page2()
    {
        return view('home.page2');
    }

    public function page3()
    {
        return view('home.page3');
    }
}
