<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\reservation;

class ReservationController extends Controller
{
    public function readDeposite(){
        $deposite = reservation::all();
        //return
    }

    public function updateDeposite(Request $request){

        $data = reservation::where('reservation_id', '=', $request->id);

        if($data){
            reservation::where('reservation_id', '=', $request->id)->update(['deposite_amount' => $request->amount ]);
        }
    }
}
