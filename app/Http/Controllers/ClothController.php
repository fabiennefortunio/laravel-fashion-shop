<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ClothController extends Controller
{

    public function index() {
       $clothes = \App\Cloth::all();
       return view("cloth",["cl" =>$clothes]);
    }
}
