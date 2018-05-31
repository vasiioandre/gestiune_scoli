<?php

namespace App\Http\Controllers;

use App\Avarii;
use App\Fotografii_Reparatii;
use App\Investitii;
use App\Reparatii;
use App\Scoala;
use App\Utilitati;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests\UploadRequest;

class AdaugareDateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adaugare_scoala(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'primarie']);

        return view('adaugare_date.adaugare_scoala');
    }

    public function adaugare_scoala_post(Request $request)
    {
        if (request()->image)
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $imageName);
        }
        else
            $imageName = NULL;

        if(request()->latitudine)
            $latitudine = request()->latitudine;
        else
            $latitudine = NULL;

        if(request()->longitudine)
            $longitudine = request()->longitudine;
        else
            $longitudine = NULL;

        DB::table('scoli')->insert([
            'nume' => $request->input('name'),
            'nr_cf' => $request->input('nr_cf'),
            'adresa'=> $request->input('address'),
            'telefon' => $request->input('phone'),
            'email' => $request->input('email'),
            'istoric' => $request->input('history'),
            'fotografie' => $imageName,
            'latitudine' => $latitudine,
            'longitudine' => $longitudine,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return back()
            ->with('success','Ati adaugat scoala cu succes.');
    }


    public function adaugare_cladire()
    {
        return view('adaugare_date.adaugare_cladire');
    }

    public function adaugare_cladire_post(Request $request)
    {
        if (request()->image)
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $imageName);
        }
        else
            $imageName = NULL;

        DB::table('cladiri_arondate')->insert([
            'id_scoala' => Session::get('selected_school'),
            'nume' => $request->input('name'),
            'adresa'=> $request->input('address'),
            'nr_cf' => $request->input('nr_cf'),
            'fotografie' => $imageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return back()
            ->with('success','Ati adaugat cladirea cu succes.');
    }


    public function adaugare_reparatie()
    {
        return view('adaugare_date.adaugare_reparatie');
    }

    public function adaugare_reparatie_post(Request $request)
    {
        $product = Reparatii::create([
            'id_scoala' => Session::get('selected_school'),
            'anul_finalizarii' => $request->input('year'),
            'detalii' => $request->input('details'),
            'suma_investita' => $request->input('amount'),
            'firma' => $request->input('company')
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

    public function adaugare_investitie()
    {
        return view('adaugare_date.adaugare_investitie');
    }

    public function adaugare_investitie_post(Request $request)
    {
        if (request()->authorization)
        {
            $authName = uniqid() . request()->authorization->getClientOriginalName();
            request()->authorization->move(public_path('img'), $authName);
        }
        else
            $authName = NULL;

        if (request()->project)
        {
            $projectName = uniqid() . request()->project->getClientOriginalName();
            request()->project->move(public_path('img'), $projectName);
        }
        else
            $projectName = NULL;

        if (request()->reception)
        {
            $receptionName = uniqid() . request()->reception->getClientOriginalName();
            request()->reception->move(public_path('img'), $receptionName);
        }
        else
            $receptionName = NULL;

        Investitii::create([
            'id_scoala' =>  Session::get('selected_school'),
            'anul_finalizarii' => $request->input('year'),
            'detalii' =>  $request->input('details'),
            'suma_investita' =>  $request->input('amount'),
            'firma' =>  $request->input('company'),
            'pdf_autorizatie' => $authName,
            'pdf_proiect' => $projectName,
            'pdf_receptie' => $receptionName,
        ]);

        return back()
            ->with('success','Ati adaugat investitia cu succes.');
    }

    public function adaugare_avarie()
    {
        return view('adaugare_date.adaugare_avarie');
    }

    public function adaugare_avarie_post(Request $request)
    {
        if (request()->solicitation)
        {
            $solicitationName = uniqid() . request()->solicitation->getClientOriginalName();
            request()->solicitation->move(public_path('img'), $solicitationName);
        }
        else
            $solicitationName = NULL;

        if (request()->reception)
        {
            $receptionName = uniqid() . request()->reception->getClientOriginalName();
            request()->reception->move(public_path('img'), $receptionName);
        }
        else
            $receptionName = NULL;

        Avarii::create([
            'id_scoala' =>  Session::get('selected_school'),
            'data_incident' => Carbon::now(),
            'suma' =>  $request->input('amount'),
            'firma' =>  $request->input('company'),
            'pdf_solicitare' => $solicitationName,
            'pdf_receptie' => $receptionName
        ]);

        return back()
            ->with('success','Ati adaugat avaria cu succes.');
    }

    public function adaugare_utilitati()
    {
        return view('adaugare_date.adaugare_utilitati');
    }

    public function adaugare_utilitati_post(Request $request)
    {
        Utilitati::create([
            'id_scoala' =>  Session::get('selected_school'),
            'data' => Carbon::now()->toDateString(),
            'consum_apa' =>  $request->input('water'),
            'consum_caldura' =>  $request->input('heat'),
        ]);

        return back()
            ->with('success','Ati adaugat utilitatile cu succes.');
    }

    public function adaugare_organizare()
    {
        $school_names = Scoala::all('nume', 'id_scoala');
        $school_name_selected = array();
        foreach ($school_names as $school_name) {
            $school_name_selected[$school_name->id_scoala] = $school_name->nume;
        }

        return view('adaugare_date.adaugare_organizare')->with("school_names", $school_name_selected);
    }

    public function adaugare_organizare_post(Request $request)
    {
        DB::table('organizare_interna')->insert([
            'id_scoala' =>  $request->input('selected_school'),
            'nr_clase' => $request->input('nr_clase'),
            'nr_elevi' =>  $request->input('nr_elevi'),
            'nr_cadre_didactice' =>  $request->input('nr_cadre_didactice'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return back()
            ->with('success','Ati adaugat informatiile cu succes.');
    }

    public function adaugare_utilizatori(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $school_names = Scoala::all('nume', 'id_scoala');
        $school_name_selected = array();
        foreach ($school_names as $school_name) {
            $school_name_selected[$school_name->id_scoala] = $school_name->nume;
        }

        return view('adaugare_date.adaugare_utilizatori')->with("school_names", $school_name_selected);
    }

}
