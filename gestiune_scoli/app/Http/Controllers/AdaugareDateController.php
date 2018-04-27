<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
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
        return view('adaugare_cladire');
    }

    public function adaugare_cladire_post()
    {
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img'), $imageName);

        DB::table('cladiri_arondate')->insert([
            'id_scoala' => Request::get('id_scoala'),
            'nume' => $nume = Request::get('nume'),
            'adresa'=> Request::get('adresa'),
            'nr_cf' => Request::get('nr_cf'),
            'fotografie' => $imageName
        ]);

        return back()
            ->with('success','Ati adaugat cladirea cu succes.');
    }
}
