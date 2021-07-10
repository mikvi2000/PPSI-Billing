<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $primaryKey = 'service_id';
    protected $keyType = 'integer';

    public function service_detail(){
        return $this->hasMany('App\Models\service_detail', 'service_id');
    }

    public function service_facility(){
        return $this->hasMany('App\Models\service_facility', 'service_id');
    }

}
