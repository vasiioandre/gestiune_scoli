<?php

namespace App\Http\Controllers;
use App\Scoala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        $school_names = Scoala::all('nume', 'id_scoala');
        $school_name_selected = array();
        foreach ($school_names as $school_name) {
            $school_name_selected[$school_name->id_scoala] = $school_name->nume;
        }

        return view('home')->with("school_names", $school_name_selected);
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
