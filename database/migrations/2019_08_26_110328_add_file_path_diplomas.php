<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilePathDiplomas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diplomas', function (Blueprint $table) {
            $table->addColumn('string', 'path', ['length' => 255])->after('nanny_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diplomas', function (Blueprint $table) {
            $table->dropColumn('path');
        });
    }
}
