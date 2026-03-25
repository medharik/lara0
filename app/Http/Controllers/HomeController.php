<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

function contacter()  {

return view('contacts');
}

function index() {
    return view('accueils');
}
function test() {
 echo "test";
}


}
