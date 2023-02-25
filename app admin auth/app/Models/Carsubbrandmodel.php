<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carsubbrandmodel extends Model
{
    use HasFactory;
    protected $fillable = [
        'brandname', 'subbrandname', 'nextbrandname', 'slug', 'image',
      ];
}
