<?php

namespace App\Http\Controllers;

use App\Scoala;
use Illuminate\Http\Request;

class ScoalaController extends Controller
{
    public function test()
    {
        $scoli = Scoala::all();

        return $scoli;
    }

    public function index()
    {
        return view('home');
    }

    public function info()
    {
        return view('info_generale');
    }
}
