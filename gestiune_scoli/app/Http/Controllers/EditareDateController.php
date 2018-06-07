<?php

namespace App\Http\Controllers;

use App\Scoala;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

    public function editare_scoala_post(Request $request)
    {
        $id = Session::get('selected_school');

        if (request()->image)
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $imageName);

            DB::table('scoli')
                ->where('id_scoala', $id)
                ->update([
                    'nume' => $request->input('name'),
                    'nr_cf' => $request->input('nr_cf'),
                    'adresa'=> $request->input('address'),
                    'telefon' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'istoric' => $request->input('history'),
                    'fotografie' => $imageName,
                    'updated_at' => Carbon::now()
                ]);
        }
        else
        {
            DB::table('scoli')
                ->where('id_scoala', $id)
                ->update([
                    'nume' => $request->input('name'),
                    'nr_cf' => $request->input('nr_cf'),
                    'adresa'=> $request->input('address'),
                    'telefon' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'istoric' => $request->input('history'),
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

    public function editare_reparatie(Request $request)
    {
        $id = Request::get('id_reparatie');

        DB::table('reparatii')
            ->where('id_reparatie', $id)
            ->update([
                'anul_finalizarii' => $request->input('an'),
                'detalii' => $request->input('detalii'),
                'suma_investita'=> $request->input('suma'),
                'firma' => $request->input('firma'),
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


    public function utilizatori(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $utilizatori = DB::table('users')
            ->leftjoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->leftjoin('roles', 'role_user.id', '=', 'roles.id')
            ->select('users.id', 'users.name', 'email', 'description')
            ->get();

        return view('editare_date.editare_utilizatori',compact('utilizatori'));
    }

    public function stergere_utilizator($id)
    {
        DB::table("users")->delete($id);

        return back()
            ->with('success','Utilizatorul a fost sters.');
    }



}
