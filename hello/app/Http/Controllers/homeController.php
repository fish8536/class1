<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function sayHello(Request $_oRequest)
    {
        return view("home.hello")->withWho($_oRequest->userName);
    }
}
