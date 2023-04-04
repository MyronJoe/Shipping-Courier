<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\carousel;
use App\Models\counter;
use App\Models\feature;
use App\Models\headers;
use App\Models\message;
use App\Models\service;
use App\Models\Shipments;
use App\Models\testimonial;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\utilities;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    //Login pattern functions
    public function redirect()
    {
        $userType = Auth::user()->user_type;

        if ($userType === '1'|| $userType === '2') {

            $datas = Shipments::orderBy('id', 'desc')->paginate(5);

            $shipments = Shipments::all()->count();

            $users = User::all()->count();

            $message = message::all()->count();

            $paid = Shipments::where('payment_status', '=', 'Paid')->get()->count();

            $delivery = Shipments::where('deliverd', '=', '0')->get()->count();

            $utilities = utilities::orderBy('id', 'desc')->get();

            return view('admin.home', compact('datas', 'shipments', 'paid', 'users', 'utilities', 'message', 'delivery'));
        } else {

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
        }
    }

    //send_message
    public function send_message(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone_no' => 'required|string',
            'details' => 'required|string',
        ]);

        $data = new message;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->phone_no;
        $data->details = $request->details;

        $data->save();

        Alert::success('Message Sent Successfully');
        return redirect('contact');
    }

    //message
    public function message()
    {
        $data = message::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        $utilities = utilities::orderBy('id', 'desc')->get();

        return view('admin.site.message.message', compact('data', 'utilities', 'message'));
    }

    //delete_message
    public function delete_message($id)
    {
        $data = message::findOrFail($id);

        $data->delete();

        return redirect('message');
    }

    //view_message
    public function view_message($id)
    {
        $data = message::findOrFail($id);

        $message = message::all()->count();

        $utilities = utilities::orderBy('id', 'desc')->get();

        return view('admin.site.message.view_message', compact('data', 'utilities', 'message'));
    }

    //service_details
    public function service_details($id)
    {
        $data = service::findOrFail($id);

        $title = service::orderBy('id', 'desc')->get();

        $service = service::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();


        return view('frontend.air', compact('data', 'title', 'service', 'utilities'));
    }

    //title_details
    public function title_details($id)
    {
        $data = service::findOrFail($id);

        $title = service::orderBy('id', 'desc')->get();

        $service = service::orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        return view('frontend.road', compact('data', 'title', 'service', 'utilities'));
    }
}
