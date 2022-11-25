<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('datasurvei_id', false);
            $table->string('nama');
            $table->string('badan_usaha');
            $table->string('jk');
            $table->string('domisili');
            $table->string('pekerjaan');
            $table->string('email');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respondences');
    }
};
