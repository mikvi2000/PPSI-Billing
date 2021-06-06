<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;

    protected $table = 'province';
    protected $primaryKey = 'province_id';
    protected $keyType = 'integer';

    public function city(){
        return $this->hasMany(city:class);
    }
}
