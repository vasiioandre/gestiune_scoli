<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function test()
    {
        //$id = Auth::user();

        $id = Session::get('variableName');
        return $id;
    }
}
