<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $fillable=['name','code','capital','year'];


    public function users(){
        return $this->hasOne(User::class,'state_id');
    }
}
