<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $table = 'room';
    protected $primaryKey = 'room_id';
    protected $keyType = 'integer';

    public function reservation_detail(){
        return $this->hasMany(reservation_detail:class);
    }

    public function room_facility(){
        return $this->hasMany(room_facility:class);
    }
}
