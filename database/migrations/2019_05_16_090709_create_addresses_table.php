<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number')->nullable();
            $table->integer('number_2')->nullable();
            $table->string('street_type', 255)->nullable();
            $table->string('street_name', 255)->nullable();
            $table->string('street_name_2', 255)->nullable();
            $table->integer('place_called')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('country', 50)->default('FR');
            $table->string('city', 255)->nullable();
            $table->string('latitude', 50)->nullable();
            $table->string('longitude', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
