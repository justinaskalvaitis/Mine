<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juice extends Model
{
    protected $fillable = [
    'title', 
    'description',
     'price', 
     'photo', 
     'type'];
}
