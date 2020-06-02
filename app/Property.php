<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $table = "property";
    protected $fillable = ['name','address','number', 'type', 'current_rate', 'prev_rent'];
}
