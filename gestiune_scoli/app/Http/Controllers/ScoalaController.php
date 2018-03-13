<?php

namespace App\Http\Controllers;

use App\Scoala;
//use Illuminate\Http\Request;
use Request;

class ScoalaController extends Controller
{
    public function info_generale()
    {
        //$input = Request::all();
        $id = Request::get('selected_school');

        $scoala = Scoala::where('id_scoala', $id)->get();

        return view('info_generale')->with("scoala", $scoala);
        //return $scoala;
    }
}
