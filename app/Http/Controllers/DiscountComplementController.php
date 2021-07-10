<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discount_complement;

class DiscountComplementController extends Controller
{
    public function HalamanDiscountComp(){

        $discount_complement = discount_complement::selectRaw("ROW_NUMBER() over() as nomor, discount_complement_id, period_id, discount_complement_name, discount_complement_type, case when  discount_complement_type = 'complement' then to_char(discount_complement_amount, '9999') 
        when discount_complement_type ='discount' then to_char(discount_complement_amount, '9999')||'%' else 'error' END
        as amount, discount_complement_rank, discount_complement_notes")->orderBy('nomor', 'ASC')->orderBy('period_id', 'DESC')->orderBy('discount_complement_id', 'ASC')->get();

        return view('diskonkomplemen', ['data'=>$discount_complement]);
    }

    public function readDiscountComplement(){
        $dataD = discount_complement::all();
        return $dataD;
    }
}
