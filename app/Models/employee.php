<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    protected $keyType = 'string';

    public function transaction(){
        return $this->hasMany(transaction:class);
    }

    public function city(){
        return $this->belongsTo(city:class);
    }
}
