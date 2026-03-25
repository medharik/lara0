<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calcul extends Model
{
    // fonction de traiement de la somme
    static function calcul_somme($a,$b)  {
    return $a+$b;

    }
    static function calcul_soustraction($a,$b)  {
    return $a-$b;

    }
}
