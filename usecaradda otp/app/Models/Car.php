<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IntlChar;

class Car extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        'model',
        'year',
        'base_price',
        'selling_price',
        'description',
        'countryname',
        'cityname',
        'state',
        'kilometers',
        'type',
        'reg_year',
        'make_year',
        'views',
        'no_of_owners',
        'owner_type',
        'engine_displacement',
        'rto',
        'insurance_type',
        'insurance_validity',
        'mileage',
        'enine_type',
        'max_power',
        'max_torque',
        'no_of_cylinders',
        'no_of_gears',
        'wheel_size',
        'seats',
        'color',
        'condition',
        'posted_by',
        'images',
        'rating',
        'bodies',
        'brand',
        'features',
        'fuel',
        'owner',
        'specification',
        'subbrand',
        'subbrandmodel',
        'type',
        'transmission',



    ];

    protected $casts = [
        'images' => 'array',
        'bodies' => 'array',
        'brand' => 'array',
        'features' => 'array',
        'fuel' => 'array',
        'owner' => 'array',
        'specification' => 'array',
        'subbrand' => 'array',
        'subbrandmodel' => 'array',
        'type' => 'array',
        'transmission' => 'array',
        'rating' => 'array',

    ];
 

   


    

}
