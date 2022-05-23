<?php 
use App\Models\Catagory1;

use App\Http\controllers\Catagory1Controller;

use App\Models\products; 
use Illuminate\Support\Facades\Route; 
use App\Http\controllers\productscontroller; 

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
Route::get('/Catagory1/register',[Catagory1Controller::class,'register'])->name('Catagory1/register');
Route::post('/Catagory1/register',[Catagory1Controller::class,'store']);
Route::get('/Catagory1/list', [Catagory1Controller::class, 'get_all'])->name('Catagory1/list');
Route::get('/Catagory1/edit/{id}', [Catagory1Controller::class, 'edit']);
Route::post('/Catagory1/update',[Catagory1Controller::class,'update'])->name('Catagory1/update')->name('Catagory1/update');
Route::get('/Catagory1/delete/{id}', [Catagory1Controller::class, 'delete']);
Route::get('/Catagory1/search/{id}', [Catagory1Controller::class, 'search'])->name('Catagory1/search'); 
Route::get('/products/register', [ProductsController::class, 'register'])->name('products/register'); 
Route::post('/products/register', [ProductsController::class, 'store'])->name('products/register'); 

Route::get('/home', [App\Http\controllers\HomeControllers ::class, 'index'])->name('home'); 
Route::get('/products/list', [ProductsController::class, 'get_all'])->name('products/list'); 
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']); 
Route::post('/products/update',[ProductsController::class,'update'])->name('products/update'); 
Route::get('/products/delete/{id}', [ProductsController::class, 'delete']); 
Route::get('/products/search/{id}', [ProductsController::class, 'search'])->name('products/search'); 
Auth::routes(); 
 


