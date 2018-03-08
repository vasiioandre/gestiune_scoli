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
        $school_names = Scoala::all( 'nume', 'id_scoala');

        return view('home', compact('school_names'));
    }

    public function info()
    {
        return view('info_generale');
    }
}
