<?php

namespace App\Http\Controllers;

use App\Models\page_cats;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class DynamicController extends Controller
{
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
        return redirect('shipments');
    }
}
