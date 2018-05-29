<?php

namespace App\Http\Controllers;

use App\Avarii;
use App\Cladiri_Arondate;
use App\Fotografii_Reparatii;
use App\Investitii;
use App\Organizare_Interna;
use App\Reparatii;
use App\Utilitati;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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

    public function cladiri_arondate(Request $request)
    {
        $id = Session::get('selected_school');
        $cladiri = Cladiri_Arondate::where('id_scoala', $id)->get();

        return view('cladiri_arondate')->with("cladiri", $cladiri);
    }

    public function reparatii()
    {
        $id = Session::get('selected_school');
        $reparatii = Reparatii::where('id_scoala', $id)->orderBy('anul_finalizarii', 'desc')->get();

        return view('reparatii')->with("reparatii", $reparatii);
    }

    public function cautare_reparatie()
    {
        $anul_finalizarii = Input::get('search');

        if($anul_finalizarii != "")
        {
            $id = Session::get('selected_school');

//            $reparatii = Reparatii::where('anul_finalizarii', 'LIKE', '%' . $anul_finalizarii . "%")->get();
            $reparatii = Reparatii::where('id_scoala', $id)->where('anul_finalizarii', $anul_finalizarii)->orderBy('anul_finalizarii', 'desc')->get();

            if(count($reparatii) > 0)
                return view('reparatii')->with("reparatii", $reparatii);
            else
                return back()->with('success','Nu s-a gasit nici o reparatie in anul cautat.');
        }
        else
            return redirect()->route('reparatii');
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

    public function investitii()
    {
        $id = Session::get('selected_school');
        $investitii = Investitii::where('id_scoala', $id)->get();

        return view('investitii')->with("investitii", $investitii);
    }

    public function avarii()
    {
        $id = Session::get('selected_school');
        $avarii = Avarii::where('id_scoala', $id)->get();

        return view('avarii')->with("avarii", $avarii);
    }

    public function utilitati()
    {
        $id = Session::get('selected_school');
        $utilitati = Utilitati::where('id_scoala', $id)->get();

        return view('utilitati')->with("utilitati", $utilitati);
    }

    public function organizare_interna()
    {
        $id = Session::get('selected_school');

        $informatii = DB::table('organizare_interna')
            ->join('scoli', 'organizare_interna.id_scoala', '=', 'scoli.id_scoala')
            ->select('organizare_interna.*', 'scoli.nume', 'scoli.fotografie')
            ->where('scoli.id_scoala', $id)
            ->get();

        return view('organizare_interna')->with("informatii", $informatii);
    }

}