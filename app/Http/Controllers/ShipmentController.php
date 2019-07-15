<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function saveShipment(Request $request){
        $data = $request->all();
        $shipment = \DB::table('shipment')->insert($data);
        return response("Success");
    }

    public function getHistory(){
        $userId = \Auth::id();

        $shipments = \DB::table('shipment')->where('created_id','=', $userId)->get();
        return view('history')->with(['shipments'=>$shipments,'user_id'=> $userId]);
    }
}
