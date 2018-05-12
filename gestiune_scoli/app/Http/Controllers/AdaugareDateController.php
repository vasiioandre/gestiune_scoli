<?php

namespace App\Http\Controllers;

use App\Fotografii_Reparatii;
use App\Reparatii;
use App\Scoala;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Request;
use App\Http\Requests\UploadRequest;

class AdaugareDateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adaugare_scoala()
    {
        return view('adaugare_date.adaugare_scoala');
    }

    public function adaugare_scoala_post()
    {
        if (request()->image)
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $imageName);
        }
        else
            $imageName = NULL;

        DB::table('scoli')->insert([
            'nume' => $nume = Request::get('name'),
            'nr_cf' => Request::get('nr_cf'),
            'adresa'=> Request::get('address'),
            'telefon' => Request::get('phone'),
            'email' => Request::get('email'),
            'istoric' => Request::get('history'),
            'fotografie' => $imageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return back()
            ->with('success','Ati adaugat cladirea cu succes.');
    }


    public function adaugare_cladire()
    {
        $school_names = Scoala::all('nume', 'id_scoala');
        $school_name_selected = array();
        foreach ($school_names as $school_name) {
            $school_name_selected[$school_name->id_scoala] = $school_name->nume;
        }

        return view('adaugare_date.adaugare_cladire')->with("school_names", $school_name_selected);
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


    public function adaugare_reparatie()
    {
        $school_names = Scoala::all('nume', 'id_scoala');
        $school_name_selected = array();
        foreach ($school_names as $school_name) {
            $school_name_selected[$school_name->id_scoala] = $school_name->nume;
        }

        return view('adaugare_date.adaugare_reparatie')->with("school_names", $school_name_selected);
    }

    public function adaugare_reparatie_post(UploadRequest $request)
    {
        $product = Reparatii::create([
            'id_scoala' => Request::get('selected_school'),
            'anul_finalizarii' => Request::get('year'),
            'detalii' => Request::get('details'),
            'suma_investita' => Request::get('amount'),
            'firma' => Request::get('company')
        ]);

        if ($request->photos)
        {
            $photo_nr = 0;

            foreach ($request->photos as $photo) {
                $photo_nr = $photo_nr + 1;
                $imageName = time().$photo_nr.'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path('img'), $imageName);

                Fotografii_Reparatii::create([
                    'id_reparatie' => $product->id,
                    'nume_fotografie' => $imageName
                ]);
            }
        }

        return back()
            ->with('success','Ati adaugat reparatia cu succes.');
    }
}
