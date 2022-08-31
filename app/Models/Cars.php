<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable=['title','value'];


    public function models(){
        return $this->hasMany(Models::class,'car_id');
    }
    public function deliveries(){
        return $this->hasMany(Delivery::class,'car_id');
    }

}
