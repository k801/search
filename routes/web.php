<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\ClientController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SponserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExelsheeControllert;
use Illuminate\Support\Facades\Auth;

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

// Route::get('home', function()
// {
//     return 1;
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\BasicController::class, 'index']);
// Route::get('welcome',)
// Route::get('users',[App\Http\Controllers\UserController::class, 'index'])->name('users.index');


// payment

// Route::get('/', [PaymentController::class,'index']);
// Route::get('/payment', [PaymentController::class,'index']);
// Route::get('/payment/index', [PaymentController::class,'index']);



// upload excel sheet table

Route::get('imporExcelsheet', [ExelsheeControllert::class,'imporExcelsheet']);
Route::post('/impsheet', [ExelsheeControllert::class,'import'])->name('importexcelsheet');






// upload client table

Route::get('importExportView', [ClientController::class,'importExportView']);
Route::post('/impclients', [ClientController::class,'import'])->name('importclient');

// upload product table

// Route::get('importproductView', [ProductController::class,'importExportView']);
// Route::post('/impproducts', [ProductController::class,'import'])->name('importProduct');


// upload sponser table
Route::get('importsponserView', [SponserController::class,'importExportView']);
Route::post('/imsponsers', [SponserController::class,'import'])->name('importSponser');


// upload new client table

Route::get('importnewclient', [ProductController::class,'importExportView']);
Route::post('/imnewclients', [ProductController::class,'import'])->name('importProduct');




// update Address colmn
// Route::get('updateAddress',[ClientController::class,'updateAddress']);


// upload date column
// Route::get('clientdate',[ClientController::class,'date']);
// Route::get('productdate',[ProductController::class,'date']);
// Route::get('sponserdate',[SponserController::class,'date']);



// upload time column
// Route::get('clientime',[ClientController::class,'time']);
// Route::get('producttime',[ProductController::class,'time']);
// Route::get('sponsertime',[SponserController::class,'time']);



Route::get('get-search-form',[SearchController::class,'index'])->name('get-form');

Route::post('getItem',[SearchController::class,'search'])->name('searchItem');




// Route::get('updateId',[SearchController::class,'update']);








// Route::get('search', [SearchController::class,'index'])->name('search');
// Route::post('searchItem', [SearchController::class,'search'])->name('searchItem');

// Route::get('import', ['app\Http\Controllers\ClientController@imprt']);
// Route::get('nn', ClientController::class,'mm');
// Route::get('/nn', [app\Http\Controllers\ClientController::class, 'mm']);
// Route::get('/',[ClientController::class, 'import']);


Route::get('newtable', [SearchController::class,'newtable']);

Route::get('update_phone1',[SearchController::class,'update_phone1']);

