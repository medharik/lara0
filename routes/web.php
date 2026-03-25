<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/annonces', [AnnonceController::class, 'mes_annonces'])->name('calculatrice.index');
Route::get('/new', [AnnonceController::class, 'new_annonce'])->name('calculatrice.index');




Route::get('/somme', [CalculController::class, 'afficher_form'])->name('calculatrice.index');
Route::post('/calcul/somme', [CalculController::class, 'somme'])->name('calculatrice.index');
//lien qui affiche la page du formulaire de la -
Route::get('/soustraction', [CalculController::class, 'afficher_form_soustraction'])->name('calculatrice.index');
//lien ou envoie le formulaire
Route::post('/calcul/soustraction', [CalculController::class, 'calcul_soustraction'])->name('calculatrice.index');















Route::get('/c', action: function () {
    echo "lien 1";
});
Route::get('/c', action: function () {
  echo "lien 2 ";
});
Route::get('/homes', action: function () {
    return view( 'accueils');
});
Route::get('/contacter', [HomeController::class,'contacter'])->name('contact');
Route::get('/h', [HomeController::class,'index'])->name('contact');
Route::get('/test', [HomeController::class,'test'])->name('contact');





Route::get('/salut', function () {

return view('hello');
// echo "salut";

});


Route::get('/contact', [IntroController::class,'contacter']);
// Route::get('/addition/{a}/{b}', [CalculController::class,'ajouter']);









Route::get('/about', function () {
    return view('about');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/home', function () {
    return view('home');
});
