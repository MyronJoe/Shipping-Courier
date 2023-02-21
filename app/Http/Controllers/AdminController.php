<?php

namespace App\Http\Controllers;

use App\Models\Shipments;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

// use RealRashid\Swee
class AdminController extends Controller
{

    //=====================================================>>>>Shipping Functions

    public function admin(){
        return view('admin.home');
    }

    //shipments function
    public function shipments(){

        // $datas = Shipments::paginate(6);
        $datas = Shipments::orderBy('id', 'desc')->paginate(10);

        return view('admin.manageShipment', compact('datas'));
    }

    //add shipment function
    public function add_shipment(){
        return view('admin.add_shipment');
    }

    
    //Add Shipment Function:
    public function addShipment(Request $request){

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

        $abrv = 'TR';

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
        $data->trackingID = $request->$abrv.'TR'.rand('123456789', '098765409');
        $data->comment = $request->comment;
        $data->origin = $request->origin;
        $data->quality = $request->quantity;
        $data->departDate = $request->departure_date;
        $data->pickupDate = $request->pickup_date;
        $data->status = $request->status;
        $data->destination = $request->destination;

        $data->save();

        return redirect('shipments')->with('message', 'Shipment Added Successfully');
    }


    //Delete shipment function
    public function Delete_shipment($id){

        $data = Shipments::findOrFail($id);

        $data->delete();

        return redirect()->route('shipments')->with('message', 'Shipment Deleted Successfully');


    }

    //Edit shipment Page
    public function Edit_shipment($id){

        $data = Shipments::findOrFail($id);

        return view('admin.edit_shipment', compact('data'));
    }


    //Updated shipment in database
    public function Update_shipment(Request $request, $id){

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
        $data->destination = $request->destination;

        $data->save();

        return redirect('shipments')->with('message', 'Shipment Updated Successfully');

    }




    //=====================================================>>>>Tracking Functions

    public function TrackingID(Request $request){

        $tracking_id = $request->trackID;

        $track = Shipments::where('trackingID', $tracking_id)->get();
        $tracker = Shipments::where('trackingID', $tracking_id)->exists();;

        if ($tracker) {
            return view('frontend.trackdetails', compact('track'));
        }else{
            Alert::error('Tracking ID Not Found', 'Check Your Tracking ID And Try Again');
            return redirect()->back();
        }

    }

    



}
