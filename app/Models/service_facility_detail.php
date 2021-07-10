<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_facility_detail extends Model
{
    use HasFactory;

    protected $table = 'service_facility_detail';
    protected $primaryKey = 'service_facility_detail_id';
    protected $keyType = 'integer';

    public function transaction(){
        return $this->belongsTo('App\Models\transaction', 'transaction_id');
    }

    public function service_facility(){
        return $this->belongsTo('App\Models\service_facility', 'service_facility_id');
    }
}
