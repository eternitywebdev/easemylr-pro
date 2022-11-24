<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use DB;
use URL;
Use Helpers;

class ReceiveAddressController extends Controller
{
    public function getPostalAddress(Request $request){
        dd("apii");
        $postcode = '174026';
        $pin = URL::to('get-address-by-postcode');
        $pin = file_get_contents('https://api.postalpincode.in/pincode/'.$postcode);
        $pins = json_decode($pin);
        $location = Location::where('postcode', $postcode)->first();

        return response()->json(['success'=>true, 'data'=>Helper::getPostalAddress($request->postal_code)]);
    }

}
