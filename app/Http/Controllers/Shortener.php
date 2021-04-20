<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shortener extends Controller
{
    public function index(){
        return view('index');
    }
}
