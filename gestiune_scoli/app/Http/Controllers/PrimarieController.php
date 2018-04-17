<?php

namespace App\Http\Controllers;

use App\Cladiri_Arondate;
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
        $id = Session::get('variableName');
        $cladiri = Cladiri_Arondate::where('id_scoala', $id)->get();

        return view('cladiri_arondate')->with("cladiri", $cladiri);
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
