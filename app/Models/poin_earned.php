<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poin_earned extends Model
{
    use HasFactory;

    protected $table = 'poin_earned';

    public function customer(){
        return $this->belongsTo('App\Models\customer', 'customer_id');
    }

    public function period(){
        return $this->belongsTo('App\Models\period', 'period_id');
    }
}
