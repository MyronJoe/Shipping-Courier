<?php

namespace App\Http\Controllers;

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
}
