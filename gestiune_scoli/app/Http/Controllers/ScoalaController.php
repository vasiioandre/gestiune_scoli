<?php

namespace App\Http\Controllers;

use App\Scoala;
//use Illuminate\Http\Request;
use Request;

class ScoalaController extends Controller
{
    public function istoric()
    {
        //$input = Request::all();
        $id = Request::get('selected_school');

        $scoala = Scoala::where('id_scoala', $id)->get();

        return view('istoric')->with("scoala", $scoala);
        //return view('istoric');
    }

}
