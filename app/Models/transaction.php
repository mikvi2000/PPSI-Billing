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

    public function reservation_detail(){
        return $this->hasMany(reservation_detail:class);
    }

    public function food_beverage_detail(){
        return $this->hasMany(food_beverage_detail:class);
    }

    public function service_detail(){
        return $this->hasMany(service_detail:class);
    }

    public function room_facility_detail(){
        return $this->hasMany(room_facility_detail:class);
    }
    
    public function service_facility_detail(){
        return $this->hasMany(service_facility_detail:class);
    }

    public function payment(){
        return $this->hasMany(payment:class);
    }

    public function customer(){
        return $this->belongsTo(poin_earned:class);
    }

    public function employee(){
        return $this->belongsTo(employee:class);
    }
}
