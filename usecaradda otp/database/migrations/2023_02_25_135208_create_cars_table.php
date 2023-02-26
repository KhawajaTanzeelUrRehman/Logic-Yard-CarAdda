<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->float('base_price')->nullable();
            $table->float('selling_price')->nullable();
            $table->text('description')->nullable();
            $table->string('countryname')->nullable();
            $table->string('cityname')->nullable();
            $table->string('state')->nullable();
            $table->integer('kilometers')->nullable();
            $table->string('type')->nullable();
            $table->integer('reg_year')->nullable();
            $table->integer('make_year')->nullable();
            $table->integer('views')->nullable();
            $table->integer('no_of_owners')->nullable();
            $table->string('owner_type')->nullable();
            $table->integer('engine_displacement')->nullable();
            $table->string('rto')->nullable();
            $table->string('insurance_type')->nullable();
            $table->date('insurance_validity')->nullable();
            $table->float('mileage')->nullable();
            $table->string('enine_type')->nullable();
            $table->integer('max_power')->nullable();
            $table->integer('max_torque')->nullable();
            $table->integer('no_of_cylinders')->nullable();
            $table->integer('no_of_gears')->nullable();
            $table->integer('wheel_size')->nullable();
            $table->integer('seats')->nullable();
            $table->string('color')->nullable();
            $table->string('condition')->nullable();
            $table->string('posted_by')->nullable();
            $table->json('images')->nullable();
            $table->json('rating')->nullable();
            $table->json('bodies')->nullable();
            $table->json('brand')->nullable();
            $table->json('features')->nullable();
            $table->json('fuel')->nullable();
            $table->json('owner')->nullable();
            $table->json('specification')->nullable();
            $table->json('subbrand')->nullable();
            $table->json('subbrandmodel')->nullable();
            $table->json('transmission')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
