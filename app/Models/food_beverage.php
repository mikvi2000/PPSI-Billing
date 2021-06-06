<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_beverage extends Model
{
    use HasFactory;

    protected $table = 'food_beverage';
    protected $primaryKey = 'food_beverage_detail';
    protected $keyType = 'integer';

    public function food_beverage_detail(){
        return $this->hasMany(food_beverage_detail:class);
    }

}
