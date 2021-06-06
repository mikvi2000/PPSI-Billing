<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_detail extends Model
{
    use HasFactory;

    protected $table = 'reservation_detail';
    protected $primaryKey = 'reservation_detail_id';
    protected $keyType = 'integer';

    public function room(){
        return $this->belongsTo(room:class);
    }

    public function transaction(){
        return $this->belongsTo(transaction:class);
    }
}
