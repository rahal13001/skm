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
        Schema::create('sugestions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('survei_id');
            $table->string('saran_1')->nullable();
            $table->string('saran_2')->nullable();
            $table->string('saran_3')->nullable();
            $table->string('saran_4')->nullable();
            $table->string('saran_5')->nullable();
            $table->string('saran_6')->nullable();
            $table->string('saran_7')->nullable();
            $table->string('saran_8')->nullable();
            $table->string('saran_9')->nullable();
            $table->string('saran_10')->nullable();
            $table->string('saran_11')->nullable();
            $table->string('saran_12')->nullable();
            $table->string('saran_13')->nullable();
            $table->string('saran_14')->nullable();
            $table->string('saran_15')->nullable();
            $table->string('saran_16')->nullable();
            $table->string('saran_17')->nullable();
            $table->string('saran_18')->nullable();
            $table->string('saran_19')->nullable();
            $table->string('saran_20')->nullable();
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
        Schema::dropIfExists('sugestions');
    }
};
