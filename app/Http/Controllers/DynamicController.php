<?php

namespace App\Http\Controllers;

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
        }
        else {
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

        // Alert::success('Category Deleted Successfully');
        return redirect('all_cat');
    }


    //delete page funtion
    public function Delete_page($id)
    {
        $data = pages::findOrFail($id);

        $data->delete();

        // Alert::success('Page Deleted Successfully');
        return redirect('allpages');
    }

    //Edit_page function
    public function Edit_page($id)
    {
        $data = pages::where('pagecat_id', $id)->get();

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

        Alert::success('Page Updated Successfully');
        return redirect('allpages');
    }
}
