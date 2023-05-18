<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
    public function Index(){
        return view ('about');
    }
    public function Sec(){
        return view ('contact');
    }
}
