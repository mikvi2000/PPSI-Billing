<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_facility_detail extends Model
{
    use HasFactory;

    protected $table = 'room_facility_detail';
    protected $primaryKey = 'room_facility_detail_id';
    protected $keyType = 'integer';

    public function transaction(){
        return $this->belongsTo('App\Models\transaction', 'transaction_id');
    }

    public function room_facility(){
        return $this->belongsTo('App\Models\room_facility', 'room_facility_id');
    }
}
