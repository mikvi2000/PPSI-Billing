<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_beverage_detail extends Model
{
    use HasFactory;

    protected $table = 'food_beverage_detail';
    protected $primaryKey = 'food_beverage_detail_id';
    protected $keyType = 'integer';

    public function transaction(){
        return $this->belongsTo(transaction:class);
    }

    public function food_beverage(){
        return $this->belongsTo(food_beverage:class);
    }
}
