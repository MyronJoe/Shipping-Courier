<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\carousel;

use App\Models\page_cats;

use App\Models\pages;

use Carbon\Carbon;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class DynamicController extends Controller
{
    //Show all category
    public function All_cat()
    {
        $data = page_cats::orderBy('id', 'desc')->get();

        return view('admin.addpage.all_cat', compact('data'));
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

        return view('admin.addpage.page.createbody', compact('data'));
    }


    //CreateBody function
    public function CreateBody($id, Request $request)
    {
        // dd($request->all());
        $request->validate([
            'body' => 'required|string',
        ]);


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

        return view('admin.addpage.page.allpages', compact('data'));
    }


    //Edit_page function
    public function Edit_page($id)
    {
        $data = pages::findOrFail($id);

        return view('admin.addpage.page.editbody', compact('data'));
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

        return view('admin.site.carousel.carousel', compact('data'));
    }

    //Add_Carousel Page
    public function Add_Carousel()
    {
        return view('admin.site.carousel.add_carousel');
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

        return view('admin.site.carousel.editcarousel', compact('data')); 
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


    public function about()
    {
        $data = about::orderBy('id', 'desc')->get();;

        return view('admin.site.about.about', compact('data'));
    }

    public function add_about()
    {
        return view('admin.site.about.add_about');
    }

    //add_about
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

        $data->image = $imageName;

        $data->save();

        Alert::success('About Added Successfully');
        return redirect('about');
    }


}
