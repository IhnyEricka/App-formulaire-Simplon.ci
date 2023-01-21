<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsCtrl;
use App\Http\Controllers\EntrantsCtrl;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    dump( DB::select('SELECT * FROM test'));
});

Route::get('/', function () {
    $_POST = DB::select('SELECT * FROM test LIMIT 1')[0];
    dd($_POST->titre);
});

Route::get('/', function () {
    $id = 5;   
    $titre = "article 2"; 
   DB::insert('INSERT INTO test (id, titre) VALUES (?, ?)', [$id, $titre]);
});

Route::post('insert_entrant', 'EntrantCtrl@insert');


Route::get('/liste', function() {
    return view('viewEntrants');
});


Route::get('/', function() {
    return view('index');
});

Route::post('/contact', array('as' =>'contact', 'uses'=>'ContactCtrl@store'));
*/

Route::get('/', function() {
    return view('index');
});

Route::post('insert_entrant', 'EntrantsCtrl@insert');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::group(['middleware'], function () {
    Route::get('liste', 'EntrantsCtrl@liste');
   // Route::get('/', 'EntrantsCtrl@insert'); 
});


require __DIR__.'/auth.php';
