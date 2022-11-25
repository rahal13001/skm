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
        Schema::create('datasurveis', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('tw',false);
            $table->smallInteger('tahun',false);
            $table->smallInteger('p1_',false);
            $table->smallInteger('p2_',false);
            $table->smallInteger('p3_',false);
            $table->smallInteger('p4_',false);
            $table->smallInteger('p5_',false);
            $table->smallInteger('p6_',false);
            $table->smallInteger('p7_',false);
            $table->smallInteger('p8_',false);
            $table->smallInteger('p9_',false);
            $table->smallInteger('p10_',false);
            $table->smallInteger('p11_',false);
            $table->smallInteger('p12_',false);
            $table->smallInteger('p13_',false);
            $table->smallInteger('p14_',false);
            $table->smallInteger('p15_',false);
            $table->smallInteger('p16_',false);
            $table->smallInteger('p17_',false);
            $table->smallInteger('p18_',false);
            $table->smallInteger('p19_',false);
            $table->smallInteger('p20_',false);
            $table->string('saran')->nullable();
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
        Schema::dropIfExists('datasurveis');
    }
};
