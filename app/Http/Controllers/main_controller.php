<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_controller extends Controller
{
    public function footer($option){
        return view('menu.main')->with('id', $option);

    }
}
