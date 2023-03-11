<?php

namespace App\Http\Controllers;

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
}
