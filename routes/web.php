<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LogoutController;

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
    return view('frontend.home');
});

Route::get('/404', function () {
    return view('frontend.error');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/tracking', function () {
    return view('frontend.tracking');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/services/air', function () {
    return view('frontend.air');
});

Route::get('/services/road', function () {
    return view('frontend.road');
});

Route::get('/services/storage', function () {
    return view('frontend.storage');
});

Route::get('/services/warehouse', function () {
    return view('frontend.warehouse');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::group(['middleware' => ['auth']], function() {
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
// });


Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/Home', [HomeController::class, 'redirect']);





//Admin Routes

Route::get('/admin', [AdminController::class, 'admin']);


//Shipment Routes

Route::get('/shipments', [AdminController::class, 'shipments'])->name('shipments');

Route::get('/add_shipment', [AdminController::class, 'add_shipment']);

Route::post('/addShipment', [AdminController::class, 'addShipment']);

Route::get('/admin/delete_shipment/{id}', [AdminController::class, 'Delete_shipment'])->name('delete_shipment');

Route::get('/edit_shipment/{id}', [AdminController::class, 'Edit_shipment'])->name('edit_shipment');

Route::post('/update_shipment/{id}', [AdminController::class, 'Update_shipment'])->name('update_shipment');

Route::post('/shipment_label/{id}', [AdminController::class, 'Shipment_label'])->name('shipment_label');

//Tracking Routes
Route::post('/tracking_product', [AdminController::class, 'TrackingID'])->name('tracking_product');