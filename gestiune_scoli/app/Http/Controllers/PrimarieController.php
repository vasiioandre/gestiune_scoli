<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimarieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return "Index Page";
    }

    public function reparatii()
    {
        return view('reparatii');
    }
}
