<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route pour afficher le formulaire de connexion
Route::get('/login', 'AuthController@showLoginForm')->name('login');

// Route pour traiter la soumission du formulaire de connexion
Route::post ('/login', 'AuthController@login');

// Route pour afficher le formulaire d'inscription
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');

// Route pour traiter la soumission du formulaire d'inscription
Route::post('/register', 'AuthController@register');

// Route pour la déconnexion de l'utilisateur
Route::post('/logout', 'AuthController@logout')->name('logout');
