<?php

namespace App\Http\Controllers;

use App\Models\about;

use App\Models\carousel;

use App\Models\counter;

use App\Models\feature;

use App\Models\headers;
use App\Models\message;
use App\Models\page_cats;

use App\Models\pages;

use App\Models\service;

use App\Models\testimonial;

use App\Models\utilities;

use Carbon\Carbon;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class DynamicController extends Controller
{
    //Show all category
    public function All_cat()
    {
        $data = page_cats::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.addpage.all_cat', compact('data', 'utilities', 'message'));
    }


    //Add category to database
    public function addCat(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        //checks if the name already exist 
        $name = page_cats::where('name', $request->name)->exists();


        if ($name) {
            //checks if name already exist
            Alert::error('Name Already Exist');
            return redirect()->back();
        } else {
            //validate and updates the database
            $pageCat_id = page_cats::insertGetId([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'created_at' => Carbon::now(),

            ]);

            pages::insert([
                'pagecat_id' => $pageCat_id,
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'created_at' => Carbon::now(),
            ]);


            Alert::success('Category Added Successfully');
            return redirect('all_cat');
        }
    }

    //delete category funtion
    public function Delete_cat($id)
    {
        $data = page_cats::findOrFail($id);

        $data->delete();

        return redirect('all_cat');
    }

    //Edit_page function
    public function Add_page($id)
    {
        $data = page_cats::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.addpage.page.createbody', compact('data', 'utilities', 'message'));
    }


    //CreateBody function
    public function CreateBody($id, Request $request)
    {
        // dd($request->all());
        $request->validate([
            'body' => 'required|string',
        ]);

        // dd($request->all());

        pages::where('pagecat_id', $id)->update([

            'body' => $request->body,

        ]);

        Alert::success('Page Updated Successfully');
        return redirect('allpages');
    }

    //Allpages function
    public function Allpages()
    {
        $data = pages::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();
        return view('admin.addpage.page.allpages', compact('data', 'utilities', 'message'));
    }


    //Edit_page function
    public function Edit_page($id)
    {
        $data = pages::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();
        return view('admin.addpage.page.editbody', compact('data', 'utilities', 'message'));
    }



    // //UpdateBody function
    public function Updatebody($id, Request $request)
    {
        $data = pages::findOrFail($id);

        $request->validate([
            'body' => 'required|string',
        ]);

        $data->body = $request->body;

        $data->save();

        Alert::success('Page Updated Successfully');
        return redirect('allpages');
    }


    //delete page funtion
    public function Delete_page($id)
    {
        $data = pages::findOrFail($id);

        $data->delete();

        return redirect('allpages');
    }


    //Carousel
    public function Carousel()
    {
        $data = carousel::orderBy('id', 'desc')->get();;

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.carousel.carousel', compact('data', 'utilities', 'message'));
    }

    //Add_Carousel Page
    public function Add_Carousel()
    {   
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.carousel.add_carousel', compact('utilities', 'message'));
    }

    //addCarousel to DB
    public function addCarousel(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'image' => 'required',
        ]);

        $data = new carousel;

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        // dd($imageName);

        $request->image->move('assets/img', $imageName);

        $data->image = $imageName;

        $data->save();

        Alert::success('Carousel Added Successfully');
        return redirect('carousel');
    }

    //delete_carousel
    public function delete_carousel($id)
    {
        $data = carousel::findOrFail($id);

        $data->delete();

        return redirect('carousel');
    }

    //edit_carousel
    public function edit_carousel($id)
    {
        $data = carousel::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.carousel.editcarousel', compact('data', 'utilities', 'message'));
    }

    //update_carousel
    public function update_carousel($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $data = carousel::findOrFail($id);

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        Alert::success('Carousel Updated Successfully');
        return redirect('carousel');
    }


    //All About
    public function about()
    {
        $header = headers::orderBy('id', 'desc')->get();

        $data = about::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.about.about', compact('data', 'header', 'utilities', 'message'));
    }

    //Add about page
    public function add_about()
    {   
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.about.add_about', compact('utilities', 'message'));
    }

    //add_about to DB
    public function addAbout(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'image' => 'required',
        ]);

        $data = new about;

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        // dd($imageName);

        $request->image->move('assets/img', $imageName);

        $data->icon = $imageName;

        $data->save();

        Alert::success('About Added Successfully');
        return redirect('about');
    }

    //delete_about
    public function delete_about($id)
    {
        $data = about::findOrFail($id);

        $data->delete();

        return redirect('about');
    }

    //edit_about page
    public function edit_about($id)
    {
        $data = about::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.about.editabout', compact('data', 'utilities', 'message'));
    }

    //update_about in DB
    public function update_about($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $data = about::findOrFail($id);

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->icon = $imageName;
        }

        $data->save();

        Alert::success('About Updated Successfully');
        return redirect('about');
    }


    //update_about us in DB
    public function update_about_us($id, Request $request)
    {
        $request->validate([
            'about_us' => 'required|string',
            // 'image' => 'required',
        ]);

        $data = headers::findOrFail($id);

        $data->about_us = $request->about_us;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        Alert::success('About Us Updated Successfully');
        return redirect('about');
    }

    //All Service
    public function service()
    {
        $header = headers::orderBy('id', 'desc')->get();

        $data = service::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.service.service', compact('data', 'header', 'utilities', 'message'));
    }


    //update_service
    public function update_service($id, Request $request)
    {
        $request->validate([
            'service_title' => 'required|string',
            'service_sub' => 'required|string',

        ]);

        $data = headers::findOrFail($id);

        $data->service_title = $request->service_title;
        $data->service_sub = $request->service_sub;

        $data->save();

        Alert::success('Service Title Updated Successfully');
        return redirect('service');
    }

    //add_service page
    public function add_service()
    {   
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.service.add_service', compact('utilities', 'message'));
    }

    //addService
    public function addService(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'body' => 'required|string',
            'image' => 'required',
        ]);

        $data = new service;

        $data->card_title = $request->title;
        $data->card_sub_title = $request->sub_title;
        $data->body = $request->body;

        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        $request->image->move('assets/img', $imageName);

        $data->image = $imageName;

        $data->save();

        Alert::success('Service Added Successfully');
        return redirect('service');
    }

    //delete_service
    public function delete_service($id)
    {
        $data = service::findOrFail($id);

        $data->delete();

        return redirect('service');
    }

    //edit_service page
    public function edit_service($id)
    {
            
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();
        
        $data = service::findOrFail($id);

        return view('admin.site.service.edit_service', compact('data', 'utilities', 'message'));
    }

    //update_service_card
    public function update_service_card($id, Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'body' => 'required|string',
        ]);

        $data = service::findOrFail($id);

        $data->card_title = $request->title;
        $data->card_sub_title = $request->sub_title;
        $data->body = $request->body;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        Alert::success('Service Updated Successfully');
        return redirect('service');
    }

    //All counter
    public function counter()
    {
        $data = counter::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.counter.counter', compact('data', 'utilities', 'message'));
    }

    //edit_counter
    public function edit_counter($id)
    {
            
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();
        
        $data = counter::findOrFail($id);

        return view('admin.site.counter.edit_counter', compact('data', 'utilities', 'message'));
    }

    //update_counter in DB
    public function update_counter($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'number' => 'required',
        ]);

        $data = counter::findOrFail($id);

        $data->title = $request->title;
        $data->number = $request->number;

        $data->save();

        Alert::success('Counter Updated Successfully');
        return redirect('counter');
    }

    //All features
    public function features()
    {
        $header = headers::orderBy('id', 'desc')->get();

        $data = feature::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.features.features', compact('data', 'header', 'utilities', 'message'));
    }

    //update_features in DB
    public function update_features($id, Request $request)
    {
        $request->validate([
            'feature_title' => 'required|string',
            'feature_sub' => 'required|string',

        ]);

        $data = headers::findOrFail($id);

        $data->feature_title = $request->feature_title;
        $data->feature_sub = $request->feature_sub;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->feature_image = $imageName;
        }

        $data->save();

        Alert::success('Features Updated Successfully');
        return redirect('features');
    }


    //Add Features page
    public function add_feature()
    {   
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.features.add_features', compact('utilities', 'message'));
    }

    //addFeatures to DB
    public function addFeatures(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'image' => 'required',
        ]);

        $data = new feature;

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        // dd($imageName);

        $request->image->move('assets/img', $imageName);

        $data->icon = $imageName;

        $data->save();

        Alert::success('Feature Added Successfully');
        return redirect('features');
    }

    //delete_feature
    public function delete_feature($id)
    {
        $data = feature::findOrFail($id);

        $data->delete();

        return redirect('features');
    }

    //edit_feature
    public function edit_feature($id)
    {
        $data = feature::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.features.edit_feature', compact('data', 'utilities', 'message'));
    }

    //update_feature_single in DB
    public function update_feature_single($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $data = feature::findOrFail($id);

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->icon = $imageName;
        }

        $data->save();

        Alert::success('Feature Updated Successfully');
        return redirect('features');
    }

    //testimonial
    public function testimonial()
    {
        $header = headers::orderBy('id', 'desc')->get();

        $data = testimonial::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.testimonial.testimonial', compact('data', 'header', 'utilities', 'message'));
    }

    //update_test_title
    public function update_test_title($id, Request $request)
    {
        $request->validate([
            'test_title' => 'required|string',

        ]);

        $data = headers::findOrFail($id);

        $data->test_title = $request->test_title;

        $data->save();

        Alert::success('Title Updated Successfully');
        return redirect('testimonial');
    }

    //add_testimonial
    public function add_testimonial()
    {

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.testimonial.add_test', compact('utilities', 'message'));
    }

    //addTestimonial
    public function addTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'rank' => 'required|string',
            'testimonial' => 'required|string',
            'image' => 'required',

        ]);

        $data = new testimonial;

        $data->name = $request->name;
        $data->rank = $request->rank;
        $data->word = $request->testimonial;


        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        $request->image->move('assets/img', $imageName);

        $data->image = $imageName;

        $data->save();

        Alert::success('Testimony Added Successfully');
        return redirect('testimonial');
    }

    //delete_testimonial
    public function delete_test($id)
    {
        $data = testimonial::findOrFail($id);

        $data->delete();

        return redirect('testimonial');
    }

    //edit_testimonial
    public function edit_test($id)
    {
        $data = testimonial::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.testimonial.edit_test', compact('data', 'utilities', 'message'));
    }

    //update_testimonial
    public function update_test($id, Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'rank' => 'required|string',
            'testimonial' => 'required|string',
        ]);

        $data = testimonial::findOrFail($id);

        $data->name = $request->name;
        $data->rank = $request->rank;
        $data->word = $request->testimonial;

        $image = $request->image;
        if ($image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/img', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        Alert::success('Testimonial Updated Successfully');
        return redirect('testimonial');
    }


    //utilities
    public function utilities()
    {
        $data = utilities::all();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.site.utilities.utilities', compact('data', 'utilities', 'message'));
    }

    //update_utility
    public function update_utility($id, Request $request)
    {
        $request->validate([
            'year' => 'required|string',
            'site_name' => 'required|string',
            'address' => 'required|string',
            'phone_no' => 'required|string',
            'mail' => 'required|string',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'linkedin' => 'required|string',
            'youtube' => 'required|string',
            'footer_note' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = utilities::findOrFail($id);

        $data->year = $request->year;
        $data->key_word = $request->key_word;
        $data->title = $request->title;
        $data->site_name = $request->site_name;
        $data->address = $request->address;
        $data->phone_number = $request->phone_no;
        $data->mail = $request->mail;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->youtube = $request->youtube;
        $data->footer_note = $request->footer_note;
        $data->description = $request->description;

        $logo_img = $request->logo_img;

        $fav_icon = $request->fav_icon;

        if ($logo_img) {

            $imageName1 = time() . '_' . $request->logo_img->getClientOriginalExtension();

            $request->logo_img->move('assets/img', $imageName1);

            $data->logo_pic = $imageName1;
        }

        if ($fav_icon) {

            $imageName2 = time() . '_' . $request->fav_icon->getClientOriginalExtension();

            $request->fav_icon->move('assets/img', $imageName2);

            $data->fav_icon = $imageName2;
        }

        $data->save();

        Alert::success('Utility Updated Successfully');
        return redirect('utilities');
    }


    //uploadImage CKEDITOR
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
