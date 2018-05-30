<?php

namespace App\Http\Controllers;

use App\Scoala;
use Carbon\Carbon;
use Request;
use Illuminate\Support\Facades\DB;
use Session;


class EditareDateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editare_scoala()
    {
        $id = Session::get('selected_school');
        $scoala = Scoala::where('id_scoala', $id)->get();

        return view('editare_date.editare_scoala')->with("scoala", $scoala);
    }

    public function editare_scoala_post()
    {
        $id = Session::get('selected_school');

        if (request()->image)
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $imageName);

            DB::table('scoli')
                ->where('id_scoala', $id)
                ->update([
                    'nume' => Request::get('name'),
                    'nr_cf' => Request::get('nr_cf'),
                    'adresa'=> Request::get('address'),
                    'telefon' => Request::get('phone'),
                    'email' => Request::get('email'),
                    'istoric' => Request::get('history'),
                    'fotografie' => $imageName,
                    'updated_at' => Carbon::now()
                ]);
        }
        else
        {
            DB::table('scoli')
                ->where('id_scoala', $id)
                ->update([
                    'nume' => Request::get('name'),
                    'nr_cf' => Request::get('nr_cf'),
                    'adresa'=> Request::get('address'),
                    'telefon' => Request::get('phone'),
                    'email' => Request::get('email'),
                    'istoric' => Request::get('history'),
                    'updated_at' => Carbon::now()
                ]);
        }

        return back()
            ->with('success','Ati modificat scoala cu succes.');
    }

    public function stergere_scoala()
    {
        $id = Session::get('selected_school');
        DB::table('scoli')->where('id_scoala', '=', $id)->delete();

        return redirect()->route('home') ->with('success','Scoala a fost stearsa din baza de date.');
    }


    public function editare_reparatii()
    {
        $id = Session::get('selected_school');
        $reparatii = DB::table("reparatii")->where('id_scoala', $id)->get();
        return view('editare_date.editare_reparatii',compact('reparatii'));
    }

    public function editare_reparatie()
    {
        $id = Request::get('id_reparatie');

        DB::table('reparatii')
            ->where('id_reparatie', $id)
            ->update([
                'anul_finalizarii' => Request::get('an'),
                'detalii' => Request::get('detalii'),
                'suma_investita'=> Request::get('suma'),
                'firma' => Request::get('firma'),
                'updated_at' => Carbon::now()
            ]);

        return back()
            ->with('success','Ati modificat reparatia cu succes.');
    }

    public function stergere_reparatie($id)
    {
        DB::table("reparatii")->where('id_reparatie', $id)->delete();

        return back()
            ->with('success','Reparatia a fost stearsa.');
    }


    public function utilizatori()
    {
        $utilizatori = DB::table("users")->get();
        return view('editare_date.editare_utilizatori',compact('utilizatori'));
    }

    public function stergere_utilizator($id)
    {
        DB::table("users")->delete($id);

        return back()
            ->with('success','Utilizatorul a fost sters.');
    }



}
