<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('admin.forms');
// });

// ;




Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');

Route::prefix('/users')->name('users.')->group(function(){


    
    Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::get('/invoice', [UserController::class, 'invoice'])->name('invoice');

    
    Route::prefix('/prouct')->name('product.')->group(function(){
        Route::get('/list', [UserController::class, 'productList'])->name('list');
        Route::get('/detail', [UserController::class, 'productDetail'])->name('detail');
    });

    Route::get('/thank-you', [UserController::class, 'thankYou'])->name('thank-you');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');


});

// Route::get('/admin/category-form',[AdminController::class, 'categoryForm'])->name('form');
// Route::get('/admin/category-list',[AdminController::class, 'categoryList'])->name('list');

// Route::get('/',[AdminController::class,'logIn'])->name('log-in');
// Route::get('/register',[AdminController::class,'register'])->name('register');



Route::get('/admin',[AdminController::class, 'dashboard'])->name('admin.dashboard');
// Group Routing
/*
Route::prefix('/admin')->name('admin.')->group(function(){

    Route::get('/',[AdminController::class, 'dashboard'])->name('dashboard');

    Route::prefix('/category')->name('category.')->group(function(){
        Route::get('/form',[AdminController::class, 'categoryForm'])->name('form');
        Route::get('/list',[AdminController::class, 'categoryList'])->name('list');
        Route::get('/show/{id}',[AdminController::class, 'categoryList'])->name('show');
        Route::get('/edit',[AdminController::class, 'categoryList'])->name('edit');
        Route::get('/delete/{id}',[AdminController::class, 'categoryList'])->name('delete');
    });
    Route::prefix('/product')->name('product.')->group(function(){
        Route::get('/form',[AdminController::class, 'productForm'])->name('form');
        Route::get('/{id}/edit',[AdminController::class, 'productEditForm'])->name('edit_form');
        Route::post('/store',[AdminController::class, 'productStore'])->name('store');
        Route::patch('/{id}/update',[AdminController::class, 'productUpdate'])->name('update');
        Route::get('/list',[AdminController::class, 'productList'])->name('index');
        Route::get('/show/{id}/',[AdminController::class, 'productShow'])->name('show');
        Route::delete('{id}/destroy',[AdminController::class, 'productDestroy'])->name('destroy');



    });
});

*/
Route::resource('/categories',CategoryController::class);


Route::get('/pruducts-trash',[AdminController::class, 'productTrash'])->name('product.trash');
Route::get('/pruducts-pdf',[AdminController::class, 'pdfDownload'])->name('product.pdf');
Route::get('/pruducts-restore/{id}',[AdminController::class, 'productRestore'])->name('product.restore');
Route::delete('/pruducts-delete/{id}',[AdminController::class, 'productDelete'])->name('product.delete');
