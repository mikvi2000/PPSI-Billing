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
        return $this->belongsTo(city:class);
    }

    public function reservation(){
        return $this->hasMany(reservation:class);
    }

    public function poin_earned(){
        return $this->hasMany(poin_earned:class);
    }

    public function transaction(){
        return $this->hasMany(transaction:class);
    }
}
