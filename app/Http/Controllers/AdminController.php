<?php

namespace App\Http\Controllers;

use App\Models\Shipments;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function admin(){
        return view('admin.home');
    }

    public function shipments(){

        // $datas = Shipments::paginate(6);
        $datas = Shipments::orderBy('id', 'desc')->paginate(10);

        return view('admin.manageShipment', compact('datas'));
    }

    public function add_shipment(){
        return view('admin.add_shipment');
    }

    public function edit_shipment(){
        return view('admin.edit_shipment');
    }

    //Add Shipment Function:
    public function addShipment(Request $request){

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
}
