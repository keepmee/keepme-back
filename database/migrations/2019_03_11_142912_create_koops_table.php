<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->text('description');
            $table->text('note');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->double('rate');
            $table->boolean('recurrent')->default(false);
            $table->text('children')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('nanny_id')->nullable()->unsigned();
            $table->bigInteger('address_id')->unsigned();
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
        Schema::dropIfExists('posts');
    }
}
