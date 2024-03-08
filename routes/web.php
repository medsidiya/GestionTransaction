<?php

use App\Http\Controllers\AcheteController;
use App\Http\Controllers\AcheteurController;
use App\Http\Controllers\NotaireController;
use App\Http\Controllers\TemoinController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VendeurController;
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

// Route::get('/transaction', function () {
//     return view('pages/transaction');
// });
// routes/web.php

Route::get('/temoins', [App\Http\Controllers\TransController::class, 'index'])->name('indexTran');
//Route::get('/temoins/{id}', [App\Http\Controllers\TransController::class, 'fetchTemoin'])->name('temoins.fetch');
Route::get('/temoins/{id}', [App\Http\Controllers\TransController::class, 'fetchTemoin'])->name('temoins.fetch');
Route::get('/notaires/{id}', [App\Http\Controllers\TransController::class, 'fetchNotaire'])->name('notaires.fetch');
Route::get('/vendeurs/{id}', [App\Http\Controllers\TransController::class, 'fetchVendeur'])->name('vendeurs.fetch');
Route::get('/acheteurs/{id}', [App\Http\Controllers\TransController::class, 'fetchAchateur'])->name('achateurs.fetch');
Route::get('/terrains/{id}', [App\Http\Controllers\TransController::class, 'fetchTerrain'])->name('terrain.fetch');
Route::get('/transaction/print/{id}', [App\Http\Controllers\TransController::class, 'print'])->name('print');
Route::resource('transaction', TransactionController::class);

// Route::get('acheteur', [AcheteController::class, 'index']);

// routes/web.php

//Route::get('/temoins/{id}', 'TransactionController@fetchTemoin')->name('temoins.fetch');


Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
    return view('layouts.auth');
});

Route::get('/index', function () {
    return view('pages/index');
});

Route::resource('temoin', TemoinController::class);
Route::resource('notaire', NotaireController::class);
Route::resource("/Vendeur", VendeurController::class);
Route::resource("/acheteur", AcheteurController::class);
Route::resource('terrain', TerrainController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
