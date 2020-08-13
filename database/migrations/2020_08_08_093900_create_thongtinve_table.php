<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongtinveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinve', function (Blueprint $table) {
            $table->id();
            $table->text('loaive');
            $table->unsignedBigInteger('chuyenbay_id')->nullable();
            $table->foreign('chuyenbay_id')->references('id')->on('chuyenbay');
            $table->unsignedBigInteger('hk_id')->nullable();
            $table->foreign('hk_id')->references('id')->on('hanhkhach');
            $table->unsignedBigInteger('datve_id')->nullable();
            $table->foreign('datve_id')->references('id')->on('datve');
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
        Schema::dropIfExists('thongtinve');
    }
}
