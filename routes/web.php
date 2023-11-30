<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        return view('dashboard',compact('users'));
    })->name('dashboard');
});


//Category Controller
Route::get('/all/category',[CategoryController::class,'index'])->name('AllCat');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('add.category');
Route::get('/category/edit/{id}',[CategoryController::class,'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update'])->name('update.category');
Route::get('/category/remove/{id}', [CategoryController::class, 'RemoveCat']);
Route::get('/category/restore/{id}', [CategoryController::class, 'RestoreCat']);
Route::get('/category/delete/{id}', [CategoryController::class, 'DeleteCat']);

//Brand Controller
Route::get('/all/brand',[BrandController::class,'AllBrand'])->name('brand');
Route::post('/brand/add', [BrandController::class, 'AddBrand'])->name('add.brand');
Route::get('/brand/remove/{id}', [BrandController::class, 'RemoveBrand']);



