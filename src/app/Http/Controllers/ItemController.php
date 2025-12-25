<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register(RegisterRequest $request)
    {

    }
}


