<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKoopApplicationForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('koop_applications', function (Blueprint $table) {
            $table->foreign('nanny_id')->references('id')->on('nannies');
            $table->foreign('koop_id')->references('id')->on('koops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('koop_applications', function (Blueprint $table) {
            //
        });
    }
}
