<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catagoryController extends Controller
{
    public function index(){
        return view('front.catagory');
    }
}
