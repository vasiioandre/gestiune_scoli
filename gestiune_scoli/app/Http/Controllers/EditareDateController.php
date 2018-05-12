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


//        switch($request->submitbutton) {
//            case 'save':



        return back()
            ->with('success','Ati modificat scoala cu succes.');

//                break;
//
//            case 'edit_photos':
//                //action for save-draft here
//                break;
//
//            case 'delete':
//                //action for save-draft here
//                break;
//        }

    }
}
