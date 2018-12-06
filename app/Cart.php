<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['name','price','quantity'];
    protected $table = 'cart';
}
