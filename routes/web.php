<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ManageOrderController;
use App\Http\Controllers\ManageReportController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\ManageProfileController;


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

Route::get('/', function (Request $request) {
    $data = Product::get();
    return view('welcome', compact('data'));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/staffHome', [App\Http\Controllers\HomeController::class, 'staffHome'])->name('staffHome')->middleware('accountType');

///////////////////////////////////////////STAFF PEKAN//////////////
Route::get('/staffPDashboard', [ManageProductController::class, 'staffP']);
Route::get('/staffPProducts', [ManageProductController::class, 'productsP']);
//add product
Route::get('/AddProduct', [ManageProductController::class, 'addProduct']);
//save product into table db
Route::post('/saveProduct', [ManageProductController::class,'saveProduct']);
//edit
Route::get('/EditProduct/{productID}', [ManageProductController::class,'editProduct']);
Route::post('/updateProduct', [ManageProductController::class,'updateProduct']);
//delete
Route::get('/DeleteProduct/{productID}', [ManageProductController::class,'DeleteProduct']);
// Route::delete('/DeleteProduct/{productID}', 'ManageProductController@DeleteProduct');

Route::get('/DetailProfile', [ManageProfileController::class,'editProfile']);



// manageprofile
Route::middleware(['auth'])->group(function (){
Route::put('/DetailProfile', 'ManageProfileController@update')->name('ManageUserProfile.updateProfile');
});

//STAFF GAMBANG
Route::get('/staffGDashboard', [App\Http\Controllers\ManageProductController::class, 'staffG']);

//view order
// Route::get('/viewOrder', [ManageOrderController::class,'viewOrder']);



////////////////////////USER///////////////
// Route::get('/home', [ManageProductController::class, 'listProductUser']);

//add order
Route::post('/AddOrder/{productID}', [ManageOrderController::class,'addOrder']);



Route::get('/orderStatus', [ManageOrderController::class,'statusOrder']);

////////////////SEARCH/////////////////////////////
//customer seacrh product
Route::get('/searchproduct', [HomeController::class,'searchproduct']);
//staff seacrh product
Route::get('/searchP', [ManageProductController::class,'searchP']);
//search user according to the account type
Route::get('/search', [UserController::class,'search']);



Route::get('/cart/{productID}', [ManageOrderController::class,'viewCart']);

//addcart
Route::post('/savecart/{productID}', [ManageOrderController::class,'savecart']);

//showcart
Route::get('/showcart', [ManageOrderController::class,'showcart']);

Route::get('/viewOrder', [ManageOrderController::class,'order']);


//download pdf cust
Route::get('/download/{file}', [ManageOrderController::class,'download']);
//view pdf stud
Route::get('/view/{id}', [ManageOrderController::class,'view']);
//view pdf staff
//view pdf
Route::get('/viewPDF/{orderID}', [ManageOrderController::class,'viewPDF']);

//delete cart
Route::get('/cancelOrder/{id}', [ManageOrderController::class,'cancelOrder']);

Route::post('/viewOrder', [ManageOrderController::class,'confirmOrder']);


//user list
Route::get('/viewUsers', [UserController::class,'viewUsers']);
//view the user
Route::get('/viewuser/{id}', [UserController::class,'viewuser']);
Route::post('/updateuser', [UserController::class,'updateuser']);
//delete user
Route::get('/deleteuser/{id}', [UserController::class,'deleteuser']);

//order stud
Route::get('/cash_order', [ManageOrderController::class,'cash_order']);

// //display orders stud
// Route::get('/cash_order', [ManageOrderController::class,'viewstudorder']);

//display orders staff
Route::get('/viewOrder', [ManageOrderController::class,'viewOrder']);

//change status order
Route::get('/finished/{orderID}', [ManageOrderController::class,'finished']);

//stud order
Route::get('/studorder', [ManageOrderController::class,'studorder']);

//cancel order by stud
Route::get('/cancel_order/{orderID}', [ManageOrderController::class,'cancel_order']);

//viewreport
Route::get('/viewReport', [ManageReportController::class,'viewReport']);

Route::post('/select', [ManageReportController::class,'getDate']);

//export pdf report
Route::get('/exportpdf', [ManageReportController::class,'exportpdf'])->name('exportpdf');






