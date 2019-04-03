<?php

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


// Kai vartotojas nueis į eagle.test/, jam atidarys HomeController kontrolerį ir metodą index
Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact'); // Skirtas atvaizduoti formai ir forma atvaizduojama metodu get

/* Jei siunčiame duomenis, tai juos siunčiame į routą, kuris sukurtas post metodu. Šis routas pasiekiamas tik, kai siunčiami duomenys. */
Route::post('/contact', 'ContactController@save')->name('contact.save');

Route::prefix('projects')->group(function () { // Grupuoja rautus pagal vardą
  // /projects
  Route::get('/', 'ProjectController@index')->name('projects'); // visiems
  // Routas: projects/{id}

  // {id} bus parametras ProjectController@view metode
  Route::get('/{id}', 'ProjectController@view')->name('projects.view');
});
// vienam projektui

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
