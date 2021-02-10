<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resta extends Model
{
    protected $fillable = ['name', 'type', 'stock', 'price', 'created_at', 'updated_at'];
    // protected $guarded = [];
}
