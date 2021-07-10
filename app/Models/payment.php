<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    protected $keyType = 'integer';

    public function transaction(){
        return $this->belongsTo('App\Models\transaction', 'transaction_id');
    }
}
