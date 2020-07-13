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

Auth::routes();

// on crée la route pour le formulaire qui est dans la page home pour modifier les infos user
Route::put('users/{user}/edit', 'UserController@update')->name('user.update');

// les parametres sont  '/home' qui correspond a l'URL du navigateur
//                      'HomeController' correspond au fichier dans lequel on va traiter la requete du serveur
//                      '@index' correspond a la method que l'on va chercher dans HomeController
// ->name designe le nom raccourci qu'on donne a la route
Route::get('/home', 'HomeController@index')->name('home');


//route pour afficher tout les levels
Route::get('levels', 'LevelController@index')->name('levels');
// route pour afficher un formulaire de creation de level ->name et on lui donne un nom
Route::get('levels/create', 'LevelController@create')->name('levels.create');
// on crée la route qui va nous permettre de sauvegarder un nouveau label dans la bdd c'est une route en post
Route::post('levels', 'LevelController@store')->name('levels.store');
//route pour voir un seul level
Route::get('levels/{level}', 'LevelController@show')->name('levels.show');
// on crée une route pour modifier un level avec une route en get
Route::get('levels/edit/{level}', 'LevelController@edit')->name('levels.edit');
// on crée la route pour update un level a partir du formulaire sur le template
// edit.blade.php dans le repertoire ressources/views/level
Route::put('levels/{level}', 'LevelController@update')->name('levels.update');
//on fait une route pour delete
Route::delete('levels/{level}', 'LevelController@destroy')->name('levels.delete');

// route pour afficher toutes les skills et ainsi de suite comme pour les routes level
Route::get('skills', 'SkillController@index')->name('skills');
Route::get('skills/create', 'SkillController@create')->name('skills.create');
Route::post('skills', 'SkillController@store')->name('skills.store');
Route::get('skills/{skill}', 'SkillController@show')->name('skills.show');
Route::get('skills/{skill}/edit', 'SkillController@edit')->name('skills.edit');
Route::put('skills/{skill}', 'SkillController@update')->name('skills.update');
Route::delete('skills/{skill}', 'SkillController@destroy')->name('skills.delete');

//on va creer une route pour montrer se que contient level_skill_user
Route::get('level_skill_user', 'LevelSkillUserController@index')->name('level_skill_user');
Route::get('level_skill_user/{level}', 'LevelSkillUserController@show')->name('level_skill_user.show');
// on crée une route pour modifier un level avec une route en get



