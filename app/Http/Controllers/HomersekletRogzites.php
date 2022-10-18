<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomersekletRogzites extends Controller
{
    public function getContent(){
        return view("homersekletRogzites");
    }
}
