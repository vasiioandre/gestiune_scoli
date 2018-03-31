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

    public function cladiri_arondate()
    {
        return view('cladiri_arondate');
    }

    public function reparatii()
    {
        return view('reparatii');
    }

    public function adaugare_scoala()
    {
        return view('adaugare_scoala');
    }
}
