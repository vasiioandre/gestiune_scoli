<?php

namespace App\Http\Controllers;
use App\Scoala;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check())
        {
            if($request->user()->hasRole(['admin', 'primarie']))
            {
                $school_names = DB::table('scoli')->select('nume', 'id_scoala')->orderBy('nume')->get();
                $school_name_selected = array();
                foreach ($school_names as $school_name) {
                    $school_name_selected[$school_name->id_scoala] = $school_name->nume;
                }

                $coordonate = DB::table('scoli')->select('nume', 'latitudine', 'longitudine')->whereNotNull('latitudine')->whereNotNull('longitudine')->get();

                return view('home')->with("school_names", $school_name_selected)->with("coordinates", $coordonate);
            }
            else
            {
                $user_id = Auth::id();
                $school_id =  User::where('id', $user_id)->pluck('id_scoala');
                Session::put('selected_school', $school_id);

                $scoala = Scoala::where('id_scoala', $school_id)->get();
                foreach ($scoala as $school) {
                    Session::put('selected_school_name', $school->nume);
                }

                return redirect()->route('get_istoric');
            }
        }
        else
        {
            $school_names = Scoala::all('nume', 'id_scoala');
            $school_name_selected = array();
            foreach ($school_names as $school_name) {
                $school_name_selected[$school_name->id_scoala] = $school_name->nume;
            }

            return view('home')->with("school_names", $school_name_selected);
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
