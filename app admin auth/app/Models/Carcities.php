<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carcities extends Model
{
    use HasFactory;
     protected $fillable = [
        'countryname', 'statename' , 'city',  'slug',
      ];
}
