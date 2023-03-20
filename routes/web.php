<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DynamicController;

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

Route::get('/label/{id}', [AdminController::class, 'Shipment_label'])->name('shipment_label');

Route::get('/receipt/{id}', [AdminController::class, 'Receipt'])->name('receipt');


//Tracking Routes
Route::post('/tracking_product', [AdminController::class, 'TrackingID'])->name('tracking_product');


//Dynamics Routes(Create Pages)
Route::get('/all_cat', [DynamicController::class, 'All_cat'])->name('all_cat');

Route::post('/addCat', [DynamicController::class, 'AddCat'])->name('addCat');

Route::post('/createbody/{id}', [DynamicController::class, 'CreateBody'])->name('update_page');

Route::get('/allpages', [DynamicController::class, 'Allpages'])->name('allpages');

Route::get('/add_page/{id}', [DynamicController::class, 'Add_page'])->name('add_page');

Route::get('/edit_page/{id}', [DynamicController::class, 'Edit_page'])->name('edit_page');

Route::post('/updatebody/{id}', [DynamicController::class, 'Updatebody'])->name('updatebody');

Route::get('/delete_cat/{id}', [DynamicController::class, 'Delete_cat'])->name('delete_cat');

Route::get('/delete_page/{id}', [DynamicController::class, 'Delete_page'])->name('delete_page');


//Dynamics Routes(Site Essentials)

Route::get('/carousel', [DynamicController::class, 'Carousel'])->name('carousel');

Route::get('/add_carousel', [DynamicController::class, 'Add_Carousel'])->name('add_carousel');

Route::post('/addCarousel', [DynamicController::class, 'addCarousel'])->name('addCarousel');

Route::get('/delete_carousel/{id}', [DynamicController::class, 'delete_carousel'])->name('delete_carousel');

Route::get('/edit_carousel/{id}', [DynamicController::class, 'edit_carousel'])->name('edit_carousel');

Route::post('/update_carousel/{id}', [DynamicController::class, 'update_carousel'])->name('update_carousel');

//about
Route::get('/about', [DynamicController::class, 'about'])->name('about');

Route::get('/add_about', [DynamicController::class, 'add_about'])->name('add_about');

Route::post('/addAbout', [DynamicController::class, 'addAbout'])->name('addAbout');

Route::get('/delete_about/{id}', [DynamicController::class, 'delete_about'])->name('delete_about');

Route::get('/edit_about/{id}', [DynamicController::class, 'edit_about'])->name('edit_about');

Route::post('/update_about/{id}', [DynamicController::class, 'update_about'])->name('update_about');

Route::post('/update_aboutus', [DynamicController::class, 'update_aboutus'])->name('update_aboutus');

Route::post('/update_about_us', [DynamicController::class, 'update_about_us'])->name('update_about_us');