<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FristController extends Controller
{

    public function index(){
    	return view("deahboad");
    }

    public function about(){
    	return view("about");
    }
}
