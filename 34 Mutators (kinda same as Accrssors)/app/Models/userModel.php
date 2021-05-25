<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;
    protected $table="users_2";
    public $timestamps=false;

    public function setNameAttribute($value)
    {
        $this->attributes['name']="Mr ".$value;
    }

    public function setAddressAttribute($value)
    {
        $this->attributes['address']=$value ." bd";
    }
}
