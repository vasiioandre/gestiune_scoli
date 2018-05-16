<?php

namespace App\Http\Controllers;

use App\Scoala;
//use Illuminate\Http\Request;
use Request;
use Session;

class ScoalaController extends Controller
{
    public function istoric_post()
    {
        $id = Request::get('selected_school');
        Session::put('selected_school', $id);

        $scoala = Scoala::where('id_scoala', $id)->get();
        foreach ($scoala as $school) {
            Session::put('selected_school_name', $school->nume);
        }

        return view('istoric')->with("scoala", $scoala);
    }

    public function istoric_get()
    {
        $id = Session::get('selected_school');
        $scoala = Scoala::where('id_scoala', $id)->get();

        return view('istoric')->with("scoala", $scoala);
    }

    public function contact()
    {
        $id = Session::get('selected_school');
        $scoala = Scoala::where('id_scoala', $id)->get();

        return view('contact')->with("scoala", $scoala);
    }
}
