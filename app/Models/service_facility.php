<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_facility extends Model
{
    use HasFactory;

    protected $table = 'service_facility';
    protected $primaryKey = 'service_facility_id';
    protected $keyType = 'integer';

    public function service_facility_detail(){
        return $this->hasMany('App\Models\service_facility_detail', 'service_facility_id');
    }

    public function service(){
        return $this->belongsTo('App\Models\service', 'service_id');
    }
}
