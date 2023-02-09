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
        return view('admin.manageShipment');
    }

    public function add_shipment(){
        return view('admin.add_shipment');
    }

    public function edit_shipment(){
        return view('admin.edit_shipment');
    }

    public function addShipment(Request $request){

        $data = new Shipments;

        $data->senderName = $request->sender_name;
        $data->senderEmail = $request->sender_email;
        $data->senderAddress = $request->sender_address;

        $data->receiverName = $request->receiverName;
        $data->receiverEmail = $request->receiverEmail;
        $data->receiverCountry = $request->receiverCountry;
        $data->receiverAddress = $request->receiverAddress;
        $data->receiverPhone = $request->receiverPhone;

        $data->shippingType = $request->;
        $data->weight = $request->;
        $data->product = $request->;
        $data->trackingID = $request->;
        $data->comment = $request->;
        $data->origin = $request->;
        $data->quality = $request->;
        $data->departDate = $request->;
        $data->pickupDate = $request->;
        $data->status = $request->;
        $data->destination = $request->;

    }
}
