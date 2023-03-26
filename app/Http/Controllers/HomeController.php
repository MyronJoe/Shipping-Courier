<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\Shipments;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    //Login pattern functions
    public function redirect()
    {
        $userType = Auth::user()->user_type;

        if ($userType === '1') {

            $datas = Shipments::orderBy('id', 'desc')->paginate(5);

            $shipments = Shipments::all()->count();

            $users = User::all()->count();

            $paid = Shipments::where('payment_status', '=', 'Paid')->get()->count();

            return view('admin.home', compact('datas', 'shipments', 'paid', 'users'));
        } else {
            return view('frontend.home');
        }
    }

    //send_message
    public function send_message(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'rank' => 'required|string',
            'testimonial' => 'required|string',
        ]);

        $data = new message;

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
}
