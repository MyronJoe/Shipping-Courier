<?php

namespace App\Http\Controllers;

use App\Models\page_cats;

use App\Models\pages;

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


    //add_page category page
    public function Page_cat()
    {
        return view('admin.addpage.page_cat');
    }

    //Add category to database
    public function addCat(Request $request)
    {
        $data = new page_cats;

        //checks if the name and slug already exist
        $name = page_cats::where('name', $request->name)->exists();
        $slug = page_cats::where('slug', $request->slug)->exists();


        if ($name) {
            //checks if name already exist
            Alert::error('Name Already Exist');
            return redirect()->back();
        } elseif ($slug) {
            //checks if slug already exist
            Alert::error('Slug Already Exist');
            return redirect()->back();
        } else {
            //validate and updates the database
            $request->validate([
                'name' => 'required|string',
                'slug' => 'required|string',
            ]);

            $data->name = $request->name;
            $data->slug = $request->slug;

            $data->save();

            Alert::success('Category Added Successfully');
            return redirect('all_cat');
        }
    }


    //delete category funtion
    public function Delete_cat($id)
    {
        $data = page_cats::findOrFail($id);

        $data->delete();

        Alert::success('Category Deleted Successfully');
        return redirect('all_cat');
    }

    //edit page category
    public function Edit_cat($id, Request $request)
    {
        $data = page_cats::findOrFail($id);

        return view('admin.addpage.edit_cat', compact('data'));
    }

    //Update Page category
    public function UpdateCat($id, Request $request)
    {
        $data = page_cats::findOrFail($id);

        //checks if the name and slug already exist && != any other name and slug in the database b4 adding to database
        $name = page_cats::where('name', $request->name)->exists();
        $slug = page_cats::where('slug', $request->slug)->exists();


        if ($name && $data->name !== $request->name) {
            //checks if name already exist
            Alert::error('Name Already Exist');
            return redirect()->back();
        } elseif ($slug && $data->slug !== $request->slug) {
            //checks if slug already exist
            Alert::error('Slug Already Exist');
            return redirect()->back();
        } else {
            //validate and updates the database
            $request->validate([
                'name' => 'required|string',
                'slug' => 'required|string',
            ]);

            $data->name = $request->name;
            $data->slug = $request->slug;

            $data->save();

            Alert::success('Category Updated Successfully');
            return redirect('all_cat');
        }
    }


    //All Pages
    public function Allpages()
    {
        $data = pages::orderBy('id', 'desc')->get();

        return view('admin.addpage.page.allpages', compact('data'));
    }

    //Create Page
    public function Createpage()
    {
        return view('admin.addpage.page.createpage');
    }

    //Add Page Function
    public function AddPage(Request $request)
    {
        $data = new pages;

        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
        ]);

        $data->pagecat_id = '1';
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->body = $request->body;

        $data->save();

        Alert::success('Page Created Successfully');
        return redirect('allpages');
    }

    //delete page funtion
    public function Delete_page($id)
    {
        $data = pages::findOrFail($id);

        $data->delete();

        Alert::success('Page Deleted Successfully');
        return redirect('allpages');
    }

    //Edit_page function
    public function Edit_page($id)
    {
        $data = pages::findOrFail($id);

        return view('admin.addpage.page.editpage', compact('data'));
    }

    //UpdatePage function
    public function UpdatePage($id, Request $request)
    {
        $data = pages::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
        ]);

        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->body = $request->body;

        $data->save();

        Alert::success('Page Deleted Successfully');
        return redirect('allpages');
    }
}
