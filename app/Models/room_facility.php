<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_facility extends Model
{
    use HasFactory;

    protected $table = 'room_facility';
    protected $primaryKey = 'room_facility_id';
    protected $keyType = 'integer';

    public function room_facility_detail(){
        return $this->hasMany(room_facility_detail:class);
    }

    public function room(){
        return $this->belongsTo(room:class);
    }
}
