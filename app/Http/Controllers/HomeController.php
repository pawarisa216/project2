<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $data = [
           "name" => "Pawarisa",
           "age" => 22,
       ];
        return view ("welcome" , $data);
    }
}
