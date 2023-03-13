<?php

namespace App\Http\Controllers;

use App\Models\page_cats;

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
}
