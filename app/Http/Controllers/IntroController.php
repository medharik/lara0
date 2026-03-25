<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{

function index()  {
    return view ('welcome');
}
function contacter()  {
    return view ('contact');
}

}
