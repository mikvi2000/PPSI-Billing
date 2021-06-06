<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poin_earned extends Model
{
    use HasFactory;

    protected $table = 'poin_earned';

    public function customer(){
        return $this->belongsTo(customer:class);
    }

    public function period(){
        return $this->belongsTo(period:class);
    }
}
