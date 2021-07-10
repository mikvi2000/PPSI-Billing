<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Models\poin_earned;
use App\Models\customer;
use App\Models\reservation;
use App\Models\reservation_detail;

class TransactionController extends Controller
{
    public function HalamanTagihan(){

        $dataT = transaction::select('transaction.transaction_id', 'customer_name', 'transaction_notes')->selectRaw("to_char(date_checkin, 'DD Month YYYY') as date_checkin, to_char(date_checkout, 'DD Month YYYY') as date_checkout, ROW_NUMBER() over() as nomor, (select payment_method from payment p where p.transaction_id = transaction.transaction_id limit 1), ((select COALESCE(sum(reservation_detail_subtotal), 0) as subreserv from transaction t join reservation r on t.transaction_id = r.transaction_id join reservation_detail rd on r.reservation_id = rd.reservation_id where r.transaction_id = transaction.transaction_id) +
                                    
        (select COALESCE(sum(food_beverage_detail_subtotal), 0) from transaction t join food_beverage_detail fd on t.transaction_id = fd.transaction_id where fd.transaction_id = transaction.transaction_id) + 
        
        (select COALESCE(sum(service_detail_subtotal), 0) from transaction t join service_detail sd on t.transaction_id = sd.transaction_id where sd.transaction_id = transaction.transaction_id) + 
                                        
        (select COALESCE(sum(room_facility_detail_subtotal), 0) from transaction t join room_facility_detail rfd on t.transaction_id = rfd.transaction_id where rfd.transaction_id = transaction.transaction_id) + 
                                        
        (select COALESCE(sum(service_facility_detail_subtotal), 0) from transaction t join service_facility_detail sfd on t.transaction_id = sfd.transaction_id where sfd.transaction_id = transaction.transaction_id)) as total")->join('customer', 'customer.customer_id', '=', 'transaction.customer_id')->join('reservation', 'reservation.transaction_id', '=', 'transaction.transaction_id')->where('transaction_status', '=', 'ongoing')->orderBy('transaction.transaction_id', 'ASC')->get();

        // $datasum = transaction::selectRaw('"transaction"."transaction_id", 
        // ((select COALESCE(sum(reservation_detail_subtotal), 0) as subreserv from transaction t join "reservation" r on "t"."transaction_id" = "r"."transaction_id" join reservation_detail rd on "r"."reservation_id" = "rd"."reservation_id" where r.transaction_id = transaction.transaction_id) +
                                    
        // (select COALESCE(sum(food_beverage_detail_subtotal), 0) from transaction t join food_beverage_detail fd on t.transaction_id = fd.transaction_id where fd.transaction_id = transaction.transaction_id) + 
        
        // (select COALESCE(sum(service_detail_subtotal), 0) from transaction t join service_detail sd on t.transaction_id = sd.transaction_id where sd.transaction_id = transaction.transaction_id) + 
                                        
        // (select COALESCE(sum(room_facility_detail_subtotal), 0) from transaction t join room_facility_detail rfd on t.transaction_id = rfd.transaction_id where rfd.transaction_id = transaction.transaction_id) + 
                                        
        // (select COALESCE(sum(service_facility_detail_subtotal), 0) from transaction t join service_facility_detail sfd on t.transaction_id = sfd.transaction_id where sfd.transaction_id = transaction.transaction_id)) as total')->where('transaction_status', '=', 'ongoing')->orderByDesc('transaction.transaction_id')->get();

        // return $dataT;
        return view('tagihan', ['data'=>$dataT]);
    }

    public function HalamanHistory(){

        $dataH = transaction::select('transaction.transaction_id', 'customer_name', 'transaction_notes')->selectRaw("to_char(date_checkin, 'DD Month YYYY') as date_checkin, to_char(date_checkout, 'DD Month YYYY') as date_checkout, ROW_NUMBER() over() as nomor, (select payment_method from payment p where p.transaction_id = transaction.transaction_id limit 1), 
        ((select COALESCE(sum(reservation_detail_subtotal), 0) as subreserv from transaction t join reservation r on t.transaction_id = r.transaction_id join reservation_detail rd on r.reservation_id = rd.reservation_id where r.transaction_id = transaction.transaction_id) +
                                    
        (select COALESCE(sum(food_beverage_detail_subtotal), 0) from transaction t join food_beverage_detail fd on t.transaction_id = fd.transaction_id where fd.transaction_id = transaction.transaction_id) + 
        
        (select COALESCE(sum(service_detail_subtotal), 0) from transaction t join service_detail sd on t.transaction_id = sd.transaction_id where sd.transaction_id = transaction.transaction_id) + 
                                        
        (select COALESCE(sum(room_facility_detail_subtotal), 0) from transaction t join room_facility_detail rfd on t.transaction_id = rfd.transaction_id where rfd.transaction_id = transaction.transaction_id) + 
                                        
        (select COALESCE(sum(service_facility_detail_subtotal), 0) from transaction t join service_facility_detail sfd on t.transaction_id = sfd.transaction_id where sfd.transaction_id = transaction.transaction_id)) as total, 
        (select sum(food_beverage_detail_amount * food_beverage_poin_amount) as totalp from transaction t join food_beverage_detail fbd on t.transaction_id = fbd.transaction_id join food_beverage fb on fbd.food_beverage_id = fb.food_beverage_id where t.transaction_id = transaction.transaction_id group by t.transaction_id) as poinearned")->join('customer', 'customer.customer_id', '=', 'transaction.customer_id')->join('reservation', 'reservation.transaction_id', '=', 'transaction.transaction_id')->where('transaction_status', '=', 'finished')->orderBy('transaction.transaction_id', 'ASC')->get();

        return view('history', ['data'=>$dataH]);
    }

    public function HalamanEditTagihan(){
        return view('update_tagihan');
    }

    public function readTransaction() {

        $dataT = transaction::select('transaction.transaction_id', 'customer_name', 'date_checkin', 'date_checkout', 'transaction_notes')->join('customer', 'customer.customer_id', '=', 'transaction.customer_id')->join('reservation', 'reservation.transaction_id', '=', 'transaction.transaction_id')->orderByDesc('transaction.transaction_id')->get();

        $datasum = transaction::selectRaw('"transaction"."transaction_id", 
        ((select COALESCE(sum(reservation_detail_subtotal), 0) as subreserv from transaction t join "reservation" r on "t"."transaction_id" = "r"."transaction_id" join reservation_detail rd on "r"."reservation_id" = "rd"."reservation_id" where r.transaction_id = transaction.transaction_id) +
                                    
        (select COALESCE(sum(food_beverage_detail_subtotal), 0) from transaction t join food_beverage_detail fd on t.transaction_id = fd.transaction_id where fd.transaction_id = transaction.transaction_id) + 
        
        (select COALESCE(sum(service_detail_subtotal), 0) from transaction t join service_detail sd on t.transaction_id = sd.transaction_id where sd.transaction_id = transaction.transaction_id) + 
                                        
        (select COALESCE(sum(room_facility_detail_subtotal), 0) from transaction t join room_facility_detail rfd on t.transaction_id = rfd.transaction_id where rfd.transaction_id = transaction.transaction_id) + 
                                        
        (select COALESCE(sum(service_facility_detail_subtotal), 0) from transaction t join service_facility_detail sfd on t.transaction_id = sfd.transaction_id where sfd.transaction_id = transaction.transaction_id)) as total')->orderByDesc('transaction.transaction_id')->get();

        return view('tagihan')->with(compact('dataT', 'datasum'));
    }


    public function Halamandashboard() {
        $datacol = transaction::selectRaw(`(select count(transaction_id) from transaction where "createdAt" between cast(date_trunc('month', current_date) as date) and (date_trunc('MONTH', (current_date)::date) + INTERVAL '1 MONTH - 1 day')::DATE) as transaksibulan, 
        (select count(transaction_id) from transaction where transaction_status = 'ongoing' and "createdAt" between cast(date_trunc('month', current_date) as date) and (date_trunc('MONTH', (current_date)::date) + INTERVAL '1 MONTH - 1 day')::DATE) as transaksiaktif`)->get();

        // $datatab = poin_earned::selectRaw(`select (select customer_name from customer where customer_id = poin_earned.customer_id), total_poin from poin_earned where period_id = (select max(period_id) from period) order by total_poin DESC limit 5`)->get();

        // return view('Master', ['datacol'=>$datacol], ['datatab'=>$datatab]);
        return $datacol;
    }
}
