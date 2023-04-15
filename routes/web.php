<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DynamicController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LogoutController;
use App\Models\about;
use App\Models\carousel;
use App\Models\counter;
use App\Models\feature;
use App\Models\headers;

use App\Models\service;
use App\Models\testimonial;
use App\Models\utilities;

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

    $header = headers::orderBy('id', 'desc')->get();

    $headers = headers::orderBy('id', 'desc')->get();

    $service = service::orderBy('id', 'desc')->get();

    $counter = counter::orderBy('id', 'desc')->get();

    $about = about::orderBy('id', 'desc')->get();

    $abouts = about::orderBy('id', 'desc')->get();

    $features = feature::orderBy('id', 'desc')->get();

    $testimony = testimonial::orderBy('id', 'desc')->get();

    $carousel = carousel::orderBy('id', 'desc')->get();

    $utilities = utilities::orderBy('id', 'desc')->get();

    return view('frontend.home', compact('service', 'header', 'headers', 'counter', 'about', 'abouts', 'features', 'testimony', 'carousel', 'utilities'));
});

// Route::view('/{path}', 'frontend.home', compact('service', 'header', 'headers', 'counter', 'about', 'abouts', 'features', 'testimony', 'carousel', 'utilities'));

// Route::get('/{path}', function () {
//     return view('frontend.error');
// });


Route::get('/aboutUs', function () {
    $header = headers::orderBy('id', 'desc')->get();

    $headers = headers::orderBy('id', 'desc')->get();

    $service = service::orderBy('id', 'desc')->get();

    $counter = counter::orderBy('id', 'desc')->get();

    $about = about::orderBy('id', 'desc')->get();

    $abouts = about::orderBy('id', 'desc')->get();

    $features = feature::orderBy('id', 'desc')->get();

    $testimony = testimonial::orderBy('id', 'desc')->get();

    $carousel = carousel::orderBy('id', 'desc')->get();

    $utilities = utilities::orderBy('id', 'desc')->get();

    return view('frontend.about', compact('service', 'header', 'headers', 'counter', 'about', 'abouts', 'features', 'testimony', 'carousel', 'utilities'));
});

Route::get('/tracking', function () {

    $utilities = utilities::orderBy('id', 'desc')->get();

    $service = service::orderBy('id', 'desc')->get();

    return view('frontend.tracking', compact('utilities', 'service'));
});

Route::get('/contact', function () {

    $utilities = utilities::orderBy('id', 'desc')->get();

    $service = service::orderBy('id', 'desc')->get();

    return view('frontend.contact', compact('utilities', 'service'));
});


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'redirect']);
});


//send_message
Route::post('/send_message', [HomeController::class, 'send_message'])->name('send_message');

// ClassicEditor
Route::post('/upload', [DynamicController::class, 'uploadImage'])->name('ckeditor.upload');

//Tracking Routes
Route::post('/tracking_product', [AdminController::class, 'TrackingID'])->name('tracking_product');

//service_details
Route::get('/services/{id}', [HomeController::class, 'service_details'])->name('service_details');

Route::get('/details/{id}', [HomeController::class, 'title_details'])->name('title_details');

Route::get('/logout', [LogoutController::class, 'logout']);




Route::middleware(['auth:sanctum', 'checkadmin',  config('jetstream.auth_session')])->group(function () {

    //Admin Routes
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    //Shipment Routes
    Route::get('/shipments', [AdminController::class, 'shipments'])->name('shipments');

    Route::get('/add_shipment', [AdminController::class, 'add_shipment']);

    Route::post('/addShipment', [AdminController::class, 'addShipment']);

    Route::get('/admin/delete_shipment/{id}', [AdminController::class, 'Delete_shipment'])->name('delete_shipment');

    Route::get('/edit_shipment/{id}', [AdminController::class, 'Edit_shipment'])->name('edit_shipment');

    Route::post('/update_shipment/{id}', [AdminController::class, 'Update_shipment'])->name('update_shipment');

    Route::get('/label/{id}', [AdminController::class, 'Shipment_label'])->name('shipment_label');

    Route::get('/receipt/{id}', [AdminController::class, 'Receipt'])->name('receipt');

    Route::get('/deliverd/{id}', [AdminController::class, 'deliverd'])->name('deliverd');

    Route::get('/not_deliverd/{id}', [AdminController::class, 'not_deliverd'])->name('not_deliverd');
});






Route::middleware(['auth:sanctum', 'checksuperadmin',  config('jetstream.auth_session')])->group(function () {

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

    //utilities
    Route::get('/utilities', [DynamicController::class, 'utilities'])->name('utilities');

    Route::post('/update_utility/{id}', [DynamicController::class, 'update_utility'])->name('update_utility');
});






Route::middleware(['auth:sanctum', 'checksuperadmin',  config('jetstream.auth_session')])->group(function () {

    //Message
    Route::get('/message', [HomeController::class, 'message'])->name('message');

    Route::get('/delete_message/{id}', [HomeController::class, 'delete_message'])->name('delete_message');

    Route::get('/view_message/{id}', [HomeController::class, 'view_message'])->name('view_message');


    //Users(admin)
    Route::get('/users', [AdminController::class, 'User'])->name('user');

    Route::get('/add_admin', [AdminController::class, 'Add_admin'])->name('add_admin');

    Route::post('/addAdmin', [AdminController::class, 'addAdmin'])->name('addAdmin');

    Route::get('/delete_admin/{id}', [AdminController::class, 'delete_admin'])->name('delete_admin');

    Route::get('/edit_admin/{id}', [AdminController::class, 'edit_admin'])->name('edit_admin');

    Route::post('/updateAdmin/{id}', [AdminController::class, 'updateAdmin'])->name('updateAdmin');
});
