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

    public function customer(){
        return $this->belongsTo(customer:class);
    }

    public function reservation_detail(){
        return $this->hasMany(reservation_detail:class);
    }
}
