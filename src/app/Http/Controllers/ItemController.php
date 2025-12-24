<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
}


