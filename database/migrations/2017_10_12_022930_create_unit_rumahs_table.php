<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_rumahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kavling');
            $table->string('blok');
            $table->integer('no_rumah');
            $table->string('harga_rumah');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
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
        Schema::dropIfExists('unit_rumahs');
    }
}
