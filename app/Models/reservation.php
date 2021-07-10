<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $table = 'reservation';
    protected $primaryKey = 'reservation_id';
    protected $keyType = 'integer';

    public function transaction(){
        return $this->belongsTo('App\Models\transaction', 'transaction_id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\customer', 'customer_id');
    }

    public function reservation_detail(){
        return $this->hasMany('App\Models\reservation_detail', 'reservation_id');
    }
}
