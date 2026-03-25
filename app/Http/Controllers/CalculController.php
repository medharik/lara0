<?php

namespace App\Http\Controllers;

use App\Models\Calcul;
use Illuminate\Http\Request;

class CalculController extends Controller
{


function calcul_soustraction(Request $request) {

$a=$request->a;
$b=$request->b;
$s=Calcul::calcul_soustraction($a,$b);
return view('calculs.resultat-soustraction',['a'=>$a,'b'=>$b,'resultat'=>$s]);
}
function afficher_form_soustraction()  {
    return view('calculs/afficher-form-sous');
}

function afficher_form()  {
    return view("calculs/create");
}
    //fonction qui recoit les donnees du formulaire : 2 nombres a et b
    function somme(Request $request) {
        // on recupere les donnees name="a" et name="b" depuis l'objet request
$nombre1=$request->a;
$nombre2=$request->b;
$somme=Calcul::calcul_somme($nombre1,$nombre2);
return view('calculs.somme',['somme'=>$somme,'notice'=>'calcul de la somme']);
    }
}
