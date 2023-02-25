<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carsubbrand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brandname', 'subbrandname',  'slug','image',
      ];
}
