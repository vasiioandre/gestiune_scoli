<?php

namespace App\Http\Controllers;

use App\Scoala;
use Illuminate\Http\Request;

class ScoalaController extends Controller
{
    public function index()
    {
        $scoli = Scoala::all();

        return $scoli;
    }
}
