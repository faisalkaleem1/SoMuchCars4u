<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;

    protected $fillable = ['title','value', 'car_id'];

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'car_id');
    }

    public function deliveries(){
        return $this->hasMany(Delivery::class,'model_id');
    }
}
