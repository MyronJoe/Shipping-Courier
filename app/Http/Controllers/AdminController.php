<?php

namespace App\Http\Controllers;

use App\Models\Shipments;

use Illuminate\Http\Request;

class AdminController extends Controller
{

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

    //edit shipment
    public function edit_shipment(){
        return view('admin.edit_shipment');
    }

    //Add Shipment Function:
    public function addShipment(Request $request){

        validator([
            'sender_name' => 'required|string',
            'sender_email' => 'required|string',
            'sender_address' => 'required|string',
            'sreceiverName' => 'required|string',
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



}
