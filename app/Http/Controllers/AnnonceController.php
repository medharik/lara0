<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    function mes_annonces ()  {
        return view('annonces-page');
    }
    function new_annonce ()  {
        return view('nouvelle-annonce');
    }
}
