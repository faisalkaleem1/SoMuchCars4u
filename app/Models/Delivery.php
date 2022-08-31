<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','model_id', 'car_id'];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'car_id');
    }
    public function models()
    {
        return $this->belongsTo(Model::class, 'model_id');
    }
}
