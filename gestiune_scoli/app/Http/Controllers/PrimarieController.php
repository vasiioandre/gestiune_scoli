<?php

namespace App\Http\Controllers;

use App\Cladiri_Arondate;
use App\Fotografii_Reparatii;
use App\Reparatii;
use Illuminate\Support\Facades\App;
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
        $id = Session::get('selected_school');
        $cladiri = Cladiri_Arondate::where('id_scoala', $id)->get();

        return view('cladiri_arondate')->with("cladiri", $cladiri);
    }

    public function reparatii()
    {
        $id = Session::get('selected_school');
        $reparatii = Reparatii::where('id_scoala', $id)->get();

        //$locale = App::getLocale();
        //$reparatie =  Reparatii::where('id_reparatie', 7)->first();

        // return  $reparatie->fotografii;

        return view('reparatii')->with("reparatii", $reparatii);
    }


    public function test()
    {
        $id = Session::get('selected_school');
        $reparatii = Reparatii::where('id_scoala', $id)->get();

        return view('test3')->with("reparatii", $reparatii);
    }

    public function galerie()
    {
        return redirect()->route('reparatii');
    }

    public function galerie_post(Request $request)
    {
        $photos = $request->all();
        array_shift($photos);

        return view('galerie')->with("photos", $photos);
    }

}