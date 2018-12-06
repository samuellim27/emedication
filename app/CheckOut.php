<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    protected $fillable = ['name','email','address','orderdate'];
    protected $table = 'checkout';
}
