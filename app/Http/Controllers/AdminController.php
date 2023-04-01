<?php

namespace App\Http\Controllers;

use App\Models\Shipments;

use App\Models\User;

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

        $paid = Shipments::where('payment_status', '=', 'Paid')->get()->count();

        return view('admin.home', compact('datas', 'shipments', 'paid', 'users'));
    }

    //shipments function
    public function shipments()
    {

        // $datas = Shipments::paginate(6);
        $datas = Shipments::orderBy('id', 'desc')->paginate(10);

        return view('admin.manageShipment', compact('datas'));
    }

    //add shipment function
    public function add_shipment()
    {
        return view('admin.add_shipment');
    }


    //Add Shipment Function:
    public function addShipment(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string',
            'sender_email' => 'required|string',
            'sender_address' => 'required|string',
            'receiverName' => 'required|string',
            'receiverEmail' => 'required|string',
            'receiverCountry' => 'required|string',
            'receiverAddress' => 'required|string',
            'receiverPhone' => 'required|string',
            'freight' => 'required|string',
            'weight' => 'required|string',
            'product' => 'required|string',
            'comment' => 'required|string',
            'origin' => 'required|string',
            'quantity' => 'required|string',
            'departure_date' => 'required|string',
            'pickup_date' => 'required|string',
            'status' => 'required|string',
            'destination' => 'required|string',

        ]);


        $data = new Shipments;

        $data->senderName = $request->sender_name;
        $data->senderEmail = $request->sender_email;
        $data->senderAddress = $request->sender_address;

        $data->receiverName = $request->receiverName;
        $data->receiverEmail = $request->receiverEmail;
        $data->receiverCountry = $request->receiverCountry;
        $data->receiverAddress = $request->receiverAddress;
        $data->receiverPhone = $request->receiverPhone;

        $data->shippingType = $request->freight;
        $data->weight = $request->weight;
        $data->product = $request->product;
        $data->trackingID = 'TR' . rand('123456789', '098765409');
        $data->comment = $request->comment;
        $data->origin = $request->origin;
        $data->quality = $request->quantity;
        $data->departDate = $request->departure_date;
        $data->pickupDate = $request->pickup_date;
        $data->status = $request->status;
        $data->destination = $request->destination;

        $data->ref_no = 'RF' . rand('123456789', '098765409');
        $data->invoice_no = 'IV' . rand('123456789', '098765409');

        $data->deliverd = 0;
        $data->payment_method = $request->payment_method;
        $data->payment_status = $request->payment_status;
        $data->amount = $request->amount;

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

    //Edit shipment Page
    public function Edit_shipment($id)
    {

        $data = Shipments::findOrFail($id);

        return view('admin.edit_shipment', compact('data'));
    }


    //Updated shipment in database
    public function Update_shipment(Request $request, $id)
    {

        $request->validate([
            'sender_name' => 'required|string',
            'sender_email' => 'required|string',
            'sender_address' => 'required|string',
            'receiverName' => 'required|string',
            'receiverEmail' => 'required|string',
            'receiverCountry' => 'required|string',
            'receiverAddress' => 'required|string',
            'receiverPhone' => 'required|string',
            'freight' => 'required|string',
            'weight' => 'required|string',
            'product' => 'required|string',
            'comment' => 'required|string',
            'origin' => 'required|string',
            'quantity' => 'required|string',
            'departure_date' => 'required|string',
            'pickup_date' => 'required|string',
            'status' => 'required|string',
            'destination' => 'required|string',

        ]);

        $data = Shipments::findOrFail($id);

        $data->senderName = $request->sender_name;
        $data->senderEmail = $request->sender_email;
        $data->senderAddress = $request->sender_address;

        $data->receiverName = $request->receiverName;
        $data->receiverEmail = $request->receiverEmail;
        $data->receiverCountry = $request->receiverCountry;
        $data->receiverAddress = $request->receiverAddress;
        $data->receiverPhone = $request->receiverPhone;

        $data->shippingType = $request->freight;
        $data->weight = $request->weight;
        $data->product = $request->product;
        $data->comment = $request->comment;
        $data->origin = $request->origin;
        $data->quality = $request->quantity;
        $data->departDate = $request->departure_date;
        $data->pickupDate = $request->pickup_date;
        $data->status = $request->status;
        $data->status = $request->status;
        $data->destination = $request->destination;

        $data->payment_method = $request->payment_method;
        $data->payment_status = $request->payment_status;
        $data->amount = $request->amount;

        $data->save();

        Alert::success('Shipment Updated Successfully');
        return redirect('shipments');
    }

    //Shipment Label Page
    public function Shipment_label($id)
    {
        $data = Shipments::findOrFail($id);
        return view('admin.label.label', compact('data'));
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

        if ($tracker) {
            return view('frontend.trackdetails', compact('track'));
        } else {
            Alert::error('Tracking ID Not Found', 'Check Your Tracking ID And Try Again');
            return redirect()->back();
        }
    }
}
