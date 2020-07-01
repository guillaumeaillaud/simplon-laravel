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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('skills', 'SkillController@index')->name('skills');
Route::get('levels', 'LevelController@index')->name('levels');
Route::get('skills/create', 'SkillController@create')->name('skills.create');
Route::post('skills', 'SkillController@store')->name('skills.store');
Route::get('skills/{skill}', 'SkillController@show')->name('skills.show');

Route::get('skills/{skill}/edit', 'SkillController@edit')->name('skills.edit');
Route::put('skills/{skill}', 'SkillController@update')->name('skills.update');

Route::delete('skills/{skill}', 'SkillController@destroy')->name('skills.delete');





