<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function index()
    {
        return view('login-sign/sign');
    }
}
