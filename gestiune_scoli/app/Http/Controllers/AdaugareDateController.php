<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Scoala;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Request;

class AdaugareDateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adaugare_scoala()
    {
        return view('adaugare_scoala');
    }

    public function adaugare_istoric()
    {
        return view('adaugare_istoric');
    }

    public function store(Request $request)
    {
        return $request->file('image');
        $request->image->store('public');
    }

    public function imageUpload()
    {
        return view('adaugare_istoric');
    }

    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('img'), $imageName);

        return back()
            ->with('success','Ati adaugat imaginea cu succes.')
            ->with('image',$imageName);

    }

    public function adaugare_cladire()
    {
        $school_names = Scoala::all('nume', 'id_scoala');
        $school_name_selected = array();
        foreach ($school_names as $school_name) {
            $school_name_selected[$school_name->id_scoala] = $school_name->nume;
        }

        return view('adaugare_cladire')->with("school_names", $school_name_selected);
        //return view('adaugare_cladire');
    }

    public function adaugare_cladire_post()
    {
        if (request()->image)
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $imageName);
        }
        else
            $imageName = NULL;

        DB::table('cladiri_arondate')->insert([
            'id_scoala' => Request::get('selected_school'),
            'nume' => $nume = Request::get('name'),
            'adresa'=> Request::get('address'),
            'nr_cf' => Request::get('nr_cf'),
            'fotografie' => $imageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return back()
            ->with('success','Ati adaugat cladirea cu succes.');
    }
}
