<?php

use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\HomeController;

use App\HTTP\Controllers\AdminController;

use App\HTTP\Controllers\InventoryController;

use App\HTTP\Controllers\DynamicPDFController;


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
    
    

    // return view("welcome",compact("table_id"));
});




Route::get("/home/{table_id}", [HomeController::class,"index"])->middleware('auth');

Route::get("/home2/{table_id}", [HomeController::class,"home2"])->middleware('auth');

Route::get("/foodmenu", [AdminController::class,"foodmenu"])->middleware('auth');

Route::get("/ownerfoodmenu", [AdminController::class,"ownerfoodmenu"])->middleware('auth');

Route::get("/ownerusers", [AdminController::class,"owneruser"])->middleware('auth');


Route::get("/infoodmenu", [InventoryController::class,"infoodmenu"])->middleware('auth');

Route::post("/uploadfood", [AdminController::class,"upload"])->middleware('auth');

Route::get("/users", [AdminController::class,"user"])->middleware('auth');

Route::get("/deletemenu/{id}", [AdminController::class,"deletemenu"])->middleware('auth');

Route::get("/deleteuser/{id}", [AdminController::class,"deleteuser"])->middleware('auth');

Route::get("/updateview/{id}", [AdminController::class,"updateview"])->middleware('auth');

Route::get("/addingredients/{id}", [AdminController::class,"addingredients"])->middleware('auth');

Route::post("/uploadingredients/{id}", [AdminController::class,"uploadingredients"])->middleware('auth');

Route::post("/uploadcomment/{id}", [HomeController::class,"uploadcomment"])->middleware('auth');


Route::post("/update/{id}", [AdminController::class,"update"])->middleware('auth');

Route::get("/admininventory", [AdminController::class,"admininventory"])->middleware('auth');

Route::get("/corderplaced", [AdminController::class,"corderplaced"])->middleware('auth');



Route::get("/chome", [AdminController::class,"chome"])->middleware('auth');

Route::post("/addcart/{table_id}/{id}", [HomeController::class,"addcart"])->middleware('auth');

Route::get("/adminorders", [AdminController::class,"adminorders"])->middleware('auth');

Route::get("/showcart/{table_id}", [HomeController::class,"showcart"])->middleware('auth');

Route::get("/remove/{table_id}", [HomeController::class,"remove"])->middleware('auth');

Route::get("/redirects", [HomeController::class,"redirects"])->middleware('auth');

Route::get("/inUser", [InventoryController::class,"inUser"])->middleware('auth');

Route::get("/lowstocks", [InventoryController::class,"lowstocks"])->middleware('auth');

Route::get("/inventory", [InventoryController::class,"inventory"])->middleware('auth');

Route::post("/uploadinventory", [InventoryController::class,"uploadinventory"])->middleware('auth');

Route::get("/orders", [HomeController::class,"orders"])->middleware('auth');

Route::get("/menu/{table_id}", [HomeController::class,"menu"])->middleware('auth');

Route::get("/feedback/{order_id}", [HomeController::class,"feedback"])->middleware('auth');

Route::get("/orderconfirm/{table_id}", [HomeController::class,"orderconfirm"])->middleware('auth');

Route::get("/orderrejected", [HomeController::class,"orderrejected"])->middleware('auth');



// Route::get("/checkOrder/{order_id}/{table_id}", [InventoryController::class,"checkOrder"]);

Route::get("/checkOrder/{order_id}/{table_id}", [HomeController::class,"checkOrder"])->middleware('auth');

// Route::get("/tempory/{table_id}", [InventoryController::class,"tempory"]);

Route::get("/tempory/{table_id}", [HomeController::class,"showprepcomments"])->middleware('auth');

Route::get("/orderconfirmed/{table_id}", [HomeController::class,"orderconfirmed"])->middleware('auth');

Route::get("/tabledetails", [HomeController::class,"tabledetails"])->middleware('auth');

Route::get("/reporthome", [AdminController::class,"reporthome"])->middleware('auth');

Route::get("/ownerreporthome", [AdminController::class,"ownerreporthome"])->middleware('auth');

Route::get("/viewcomments", [AdminController::class,"viewcomments"])->middleware('auth');

Route::get("/dynamic_pdf",[DynamicPDFController::class,"index"])->middleware('auth');

Route::get("/dynamic_pdf/pdf",[DynamicPDFController::class,"pdf"])->middleware('auth');

Route::get("/thankyou", [HomeController::class,"thankyou"])->middleware('auth');

Route::get("/gettable", [HomeController::class,"gettable"])->middleware('auth');

Route::get("/callhome", [HomeController::class,"callhome"])->middleware('auth');

// Route::get("/showorders/{order_id}", [AdminController::class,"showorders"]);
Route::get("/showorders/{order_id}/{table_id}", [AdminController::class,"showorders"])->middleware('auth');

Route::post("/uploadnotes/{id}", [HomeController::class,"uploadnotes"])->middleware('auth');

Route::get("/markAsConfirmed/{order_id}", [AdminController::class,"markAsConfirmed"])->middleware('auth');

Route::get("/markAsServed/{order_id}", [AdminController::class,"markAsServed"])->middleware('auth');

 Route::get("/adminhome", [HomeController::class,"adminhome"])->middleware('auth')->middleware('auth');

 Route::get("/updateinview/{item_code}", [AdminController::class,"updateinview"])->middleware('auth');

// APIs
Route::get("/getTableOverviewData", [HomeController::class,"getTableOverviewData"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
