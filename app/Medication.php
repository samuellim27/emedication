<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = ['name','description','price'];
    protected $table = 'medications';
}
