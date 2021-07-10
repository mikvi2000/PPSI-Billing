<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    protected $keyType = 'integer';

    public function reservation(){
        return $this->hasMany('App\Models\reservation', 'transaction_id');
    }

    public function food_beverage_detail(){
        return $this->hasMany('App\Models\food_beverage_detail', 'transaction_id');
    }

    public function service_detail(){
        return $this->hasMany('App\Models\service_detail', 'transaction_id');
    }

    public function room_facility_detail(){
        return $this->hasMany('App\Models\room_facility_detail', 'transaction_id');
    }
    
    public function service_facility_detail(){
        return $this->hasMany('App\Models\service_facility_detail', 'transaction_id');
    }

    public function payment(){
        return $this->hasMany('App\Models\payment', 'transaction_id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\customer', 'customer_id');
    }

    public function employee(){
        return $this->belongsTo('App\Models\employee', 'employee_id');
    }
}
