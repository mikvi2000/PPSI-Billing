<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;

class ReservationController extends Controller
{
    public function HalamanDeposite(){
        return view('deposit');
    }

    public function HalamanEditDeposite(){
        return view('update_deposit');
    }

    public function HalamanHistory(){
        return view('history');
    }

    public function readDeposite(){
        $deposite = reservation::all();
        return $deposite;
    }

    public function updateDeposite(Request $request){

        $data = reservation::where('reservation_id', '=', $request->id);

        if($data){
            reservation::where('reservation_id', '=', $request->id)->update(['deposite_amount' => $request->amount ]);
        }
    }
}
