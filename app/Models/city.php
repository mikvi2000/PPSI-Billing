<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $primaryKey = 'city_id';
    protected $keyType = 'string';

    public function province(){
        return $this->belongsTo('App\Models\province', 'province_id');
    }

    public function customer(){
        return $this->hasMany('App\Models\customer', 'city_id');
    }

    public function employee(){
        return $this->hasMany('App\Models\employee', 'city_id');
    }
}
