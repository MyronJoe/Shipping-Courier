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

Route::get('/aboutUs', function () {
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

Route::post('/update_about_us/{id}', [DynamicController::class, 'update_about_us'])->name('update_about_us');

//service
Route::get('/service', [DynamicController::class, 'service'])->name('service');

Route::get('/add_service', [DynamicController::class, 'add_service'])->name('add_service');

Route::post('/addService', [DynamicController::class, 'addService'])->name('addService');

Route::post('/update_service/{id}', [DynamicController::class, 'update_service'])->name('update_service');

Route::post('/update_service_card/{id}', [DynamicController::class, 'update_service_card'])->name('update_service_card');

Route::get('/delete_service/{id}', [DynamicController::class, 'delete_service'])->name('delete_service');

Route::get('/edit_service/{id}', [DynamicController::class, 'edit_service'])->name('edit_service');

//counter
Route::get('/counter', [DynamicController::class, 'counter'])->name('counter');

Route::get('/edit_counter/{id}', [DynamicController::class, 'edit_counter'])->name('edit_counter');

Route::post('/update_counter/{id}', [DynamicController::class, 'update_counter'])->name('update_counter');

//features
Route::get('/features', [DynamicController::class, 'features'])->name('features');

Route::get('/add_feature', [DynamicController::class, 'add_feature'])->name('add_feature');

Route::post('/addFeatures', [DynamicController::class, 'addFeatures'])->name('addFeatures');

Route::post('/update_feature_single/{id}', [DynamicController::class, 'update_feature_single'])->name('update_feature_single');

Route::get('/delete_feature/{id}', [DynamicController::class, 'delete_feature'])->name('delete_feature');

Route::get('/edit_feature/{id}', [DynamicController::class, 'edit_feature'])->name('edit_feature');

Route::post('/update_features/{id}', [DynamicController::class, 'update_features'])->name('update_features');

//testimonial
Route::get('/testimonial', [DynamicController::class, 'testimonial'])->name('testimonial');

Route::get('/add_testimonial', [DynamicController::class, 'add_testimonial'])->name('add_testimonial');

Route::post('/addTestimonial', [DynamicController::class, 'addTestimonial'])->name('addTestimonial');

Route::get('/delete_test/{id}', [DynamicController::class, 'delete_test'])->name('delete_test');

Route::get('/edit_test/{id}', [DynamicController::class, 'edit_test'])->name('edit_test');

Route::post('/update_test/{id}', [DynamicController::class, 'update_test'])->name('update_test');

Route::post('/update_test_title/{id}', [DynamicController::class, 'update_test_title'])->name('update_test_title');
