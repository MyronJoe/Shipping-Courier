<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\service;
use App\Models\Shipments;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\utilities;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use PDF;

// use RealRashid\Swee
class AdminController extends Controller
{
   

    //=====================================================>>>>Shipping Functions

    public function admin()
    {
        $datas = Shipments::orderBy('id', 'desc')->paginate(5);

        $shipments = Shipments::all()->count();

        $users = User::all()->count();

        $message = message::all()->count();

        $delivery = Shipments::where('deliverd', '=', '0')->get()->count();

        $paid = Shipments::where('payment_status', '=', 'Paid')->get()->count();

        $utilities = utilities::orderBy('id', 'desc')->get();

        return view('admin.home', compact('datas', 'shipments', 'paid', 'users', 'utilities', 'message', 'delivery'));
    }

    //shipments function
    public function shipments()
    {

        // $datas = Shipments::paginate(6);
        $datas = Shipments::orderBy('id', 'desc')->paginate(10);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.manageShipment', compact('datas', 'utilities', 'message'));
    }

    //add shipment function
    public function add_shipment()
    {

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.add_shipment', compact('utilities', 'message'));
        
    }


    //Add Shipment Function:
    public function addShipment(Request $request)
    {
        $byte = random_bytes(5);

        // dd();

        $request->validate([
            'sender_name' => 'required|string',
            'sender_email' => 'required|string',
            'sender_address' => 'required|string',
            'sender_contact' => 'required|string',
            'receiverName' => 'required|string',
            'receiverEmail' => 'required|string',
            'receiverAddress' => 'required|string',
            'receiverPhone' => 'required|string',


            'description' => 'required|string',
            'departure_date' => 'required|string',
            'pickup_date' => 'required|string',
            'status' => 'required|string',
            'dispatch' => 'required|string',
            'current_location' => 'required|string',

        ]);


        $data = new Shipments;

        $data->senderName = $request->sender_name;
        $data->senderEmail = $request->sender_email;
        $data->senderAddress = $request->sender_address;
        $data->sender_contact = $request->sender_contact;

        $data->receiverName = $request->receiverName;
        $data->receiverEmail = $request->receiverEmail;
        $data->receiverAddress = $request->receiverAddress;
        $data->receiverPhone = $request->receiverPhone;

        $data->trackingID = 'BL' . bin2hex($byte);

        $data->departDate = $request->departure_date;
        $data->pickupDate = $request->pickup_date;
        $data->package_description = $request->description;

        $data->status = $request->status;
        $data->dispatch_location = $request->dispatch;
        $data->current_location = $request->current_location;

        $data->ref_no = 'RF' . rand('123456789', '098765409');
        $data->invoice_no = 'IV' . rand('123456789', '098765409');

        $data->deliverd = 0;

        $data->save();

        Alert::success('Shipment Added Successfully');
        return redirect('shipments');
    }

    //Delete shipment function
    public function Delete_shipment($id)
    {
        $data = Shipments::findOrFail($id);

        $data->delete();

        // Alert::success('Shipment Deleted Successfully');
        return redirect()->route('shipments');
    }

    //change deliverd state
    public function deliverd($id)
    {
        $data = Shipments::findOrFail($id);

        $data->deliverd = 1;

        $data->save();
        Alert::success('Shipment Delivery State Changed');
        return redirect()->route('admin');
    }

    //change deliverd state
    public function not_deliverd($id)
    {
        $data = Shipments::findOrFail($id);

        $data->deliverd = 0;

        $data->save();
        Alert::success('Shipment Delivery State Changed');
        return redirect()->route('admin');
    }

    //Edit shipment Page
    public function Edit_shipment($id)
    {

        $data = Shipments::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.edit_shipment', compact('data', 'utilities', 'message'));
    }


    //Updated shipment in database
    public function Update_shipment(Request $request, $id)
    {

        $request->validate([
            'sender_name' => 'required|string',
            'sender_email' => 'required|string',
            'sender_address' => 'required|string',
            'sender_contact' => 'required|string',
            'receiverName' => 'required|string',
            'receiverEmail' => 'required|string',
            'receiverAddress' => 'required|string',
            'receiverPhone' => 'required|string',


            'description' => 'required|string',
            'departure_date' => 'required|string',
            'pickup_date' => 'required|string',
            'status' => 'required|string',
            'dispatch' => 'required|string',
            'current_location' => 'required|string',

        ]);

        $data = Shipments::findOrFail($id);

        $data->senderName = $request->sender_name;
        $data->senderEmail = $request->sender_email;
        $data->senderAddress = $request->sender_address;
        $data->sender_contact = $request->sender_contact;

        $data->receiverName = $request->receiverName;
        $data->receiverEmail = $request->receiverEmail;
        $data->receiverAddress = $request->receiverAddress;
        $data->receiverPhone = $request->receiverPhone;

        $data->departDate = $request->departure_date;
        $data->pickupDate = $request->pickup_date;
        $data->package_description = $request->description;

        $data->status = $request->status;
        $data->dispatch_location = $request->dispatch;
        $data->current_location = $request->current_location;

        $data->save();

        Alert::success('Shipment Updated Successfully');
        return redirect('shipments');
    }

    //Shipment Label Page
    public function Shipment_label($id)
    {
        $data = Shipments::findOrFail($id);

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.label.label', compact('data', 'utilities', 'message'));
    }

    //Download Receipt PDF Page
    public function Receipt($id)
    {
        $data = Shipments::findOrFail($id);

        $pdf = PDF::loadView('admin.receipt.receipt', compact('data'));


        return $pdf->download('receipt.pdf');

        // return view('admin.receipt.receipt', compact('data'));
    }

    //======================================>>>>Tracking Functions

    public function TrackingID(Request $request)
    {

        $tracking_id = $request->trackID;

        $track = Shipments::where('trackingID', $tracking_id)->get();
        
        $tracker = Shipments::where('trackingID', $tracking_id)->exists();;

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        $service = service::orderBy('id', 'desc')->get();

        if ($tracker) {
            return view('frontend.trackdetails', compact('track', 'utilities', 'service'));
        } else {
            Alert::error('Tracking ID Not Found', 'Check Your Tracking ID And Try Again');
            return redirect()->back();
        }
    }

    //User
    public function User()
    {

        // $datas = Shipments::paginate(6);
        $admin_users = User::where('user_type', '=', '1')->orderBy('id', 'desc')->get();

        $super_admin = User::where('user_type', '=', '2')->orderBy('id', 'desc')->get();

        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.users.user', compact('admin_users', 'super_admin', 'utilities', 'message'));
    }

    //add_admin page
    public function Add_admin()
    {
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        return view('admin.users.add_admin', compact('utilities', 'message'));
    }

    //addAdmin to DB
    public function addAdmin(Request $request)
    {
        //validate user form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);

        //Checks if the user already exist b4 adding to the database
        $email = User::where('email', $request->email)->exists();
        if ($email) {
            Alert::error('Email Already Exist');
            return redirect()->back();
        }
        else {

            $data  = new User();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            if ($request->super_admin) {
                $data->user_type = '2';
            } else {
                $data->user_type = '1';
            }

            $data->save();

            Alert::success('Admin Created Successfully');
            return redirect()->route('user');
        }
    }

    //delete_admin
    public function delete_admin($id)
    {
        $data = User::findOrFail($id);

        $data->delete();

        return redirect()->route('user');
    }

    //edit_user page
    public function edit_admin($id)
    {
        $utilities = utilities::orderBy('id', 'desc')->get();

        $message = message::all()->count();

        $data = User::findOrFail($id);

        return view('admin.users.edit_user', compact('utilities', 'message', 'data'));
    }

    //updateAdmin in DB

    public function updateAdmin($id, Request $request)
    {
        //validate user form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);


        $data = User::findOrFail($id);

        //checks if the email already exist && != any other email in the database b4 adding to database
        $email = User::where('email', $request->email)->exists();


        if ($email && $data->email !== $request->email) {
            Alert::error('Email Already Exist');
            return redirect()->back();
        } else {

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            if ($request->super_admin) {
                $data->user_type = '2';
            } else {
                $data->user_type = '1';
            }

            $data->save();

            Alert::success('Admin User updated Successfully');
            return redirect()->route('user');
        }
    }
}
