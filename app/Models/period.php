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
        return $this->hasMany(poin_earned:class);
    }

    public function discount_complement(){
        return $this->hasMany(discount_complement:class);
    }
}
