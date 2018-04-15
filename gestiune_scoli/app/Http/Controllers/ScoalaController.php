<?php

namespace App\Http\Controllers;

use App\Scoala;
//use Illuminate\Http\Request;
use Request;
use Session;

class ScoalaController extends Controller
{
    public function istoric()
    {
        //$input = Request::all();
        $id = Request::get('selected_school');

        Session::put('variableName', $id);

        $scoala = Scoala::where('id_scoala', $id)->get();

        return view('istoric')->with("scoala", $scoala);
        //return view('istoric');
    }

    public function istoric_get()
    {
        $id = Session::get('variableName');

        $scoala = Scoala::where('id_scoala', $id)->get();
        return view('istoric')->with("scoala", $scoala);
    }

    public function contact()
    {
        return view('contact');
    }
}
