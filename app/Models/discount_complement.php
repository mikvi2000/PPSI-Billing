<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount_complement extends Model
{
    use HasFactory;

    protected $table = 'discount_complement';
    protected $primaryKey = 'discount_complement_id';
    protected $keyType = 'integer';

    public function period(){
        return $this->belongsTo('App\Models\period', 'period_id');
    }
}
