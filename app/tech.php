<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tech extends Model
{
    protected $fillable = [
    'title', 
    'description',
     'price', 
     'photo', 
     'type'];
}
