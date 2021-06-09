<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\poin_earned;

class PoinEarnedController extends Controller
{
    public function readPoinearned(){
        $deposite = poin_earned::all()->orderBy('period_id', 'DESC')->orderBy('total_poin', 'DESC');
        //return
    }
}
