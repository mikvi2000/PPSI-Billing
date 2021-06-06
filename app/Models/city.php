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
        return $this->belongsTo(province:class);
    }

    public function customer(){
        return $this->hasMany(customer:class);
    }

    public function employee(){
        return $this->hasMany(employee:class);
    }
}
