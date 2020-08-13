<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datve', function (Blueprint $table) {
            $table->id();
            $table->float('tongtien');
            $table->unsignedBigInteger('hk_id')->nullable();
            $table->foreign('hk_id')->references('id')->on('hanhkhach');
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
        Schema::dropIfExists('datve');
    }
}
