<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class period extends Model
{
    use HasFactory;

    protected $table = 'period';
    protected $primaryKey = 'period_id';
    protected $keyType = 'integer';

    public function poin_earned(){
        return $this->hasMany('App\Models\poin_earned', 'period_id');
    }

    public function discount_complement(){
        return $this->hasMany('App\Models\discount_complement', 'period_id');
    }
}
