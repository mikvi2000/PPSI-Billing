<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_detail extends Model
{
    use HasFactory;

    protected $table = 'service_detail';
    protected $primaryKey = 'service_detail_id';
    protected $keyType = 'integer';

    public function transaction(){
        return $this->belongsTo(transaction:class);
    }

    public function service(){
        return $this->belongsTo(service:class);
    }
}
