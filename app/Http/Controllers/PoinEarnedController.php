<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\poin_earned;
use App\Models\customer;

class PoinEarnedController extends Controller
{
    public function HalamanPoinEarned(){
        $poinEarned = poin_earned::selectRaw('ROW_NUMBER() over() as nomor, customer_id, period_id, total_poin, (select customer_name from customer c where c.customer_id = poin_earned.customer_id) as nama')->get();

        return view('pointcust', ['data'=>$poinEarned]);
    }
    
    public function readPoinearned(){
        $poinEarned = poin_earned::selectRaw('ROW_NUMBER() over() as nomor, customer_id, period_id, total_poin, (select customer_name from customer c where c.customer_id = poin_earned.customer_id)')->get();
        return $poinEarned;
    }
}
