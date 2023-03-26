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
            'email' => 'required|string',
            'subject' => 'required|string',
            'details' => 'required|string',
        ]);

        $data = new message;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->details = $request->details;

        $data->save();

        Alert::success('Message Sent Successfully');
        return redirect('contact');
    }

    //message
    public function message()
    {
        $data = message::orderBy('id', 'desc')->get();

        return view('admin.site.message.message', compact('data'));
    }
}
