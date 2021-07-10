<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    protected $keyType = 'integer';

    public function city(){
        return $this->belongsTo('App\Models\city', 'city_id');
    }

    public function reservation(){
        return $this->hasMany('App\Models\reservation', 'customer_id');
    }

    public function poin_earned(){
        return $this->hasMany('App\Models\poin_earned', 'customer_id');
    }

    public function transaction(){
        return $this->hasMany('App\Models\transaction', 'customer_id');
    }
}
