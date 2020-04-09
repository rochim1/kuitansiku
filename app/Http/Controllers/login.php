<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    function index(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);
    }
}
