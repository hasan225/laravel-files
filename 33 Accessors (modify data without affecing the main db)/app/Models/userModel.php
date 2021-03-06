<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;
    protected $table="users_2";

    public function getNameAttribute($value){
        return ucwords($value);
         }

    public function getAddressAttribute($value){
        return ($value).',ASIA';
    }
}
