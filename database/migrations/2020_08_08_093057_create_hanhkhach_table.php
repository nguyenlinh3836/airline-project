<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHanhkhachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanhkhach', function (Blueprint $table) {
            $table->id();
            $table->text('ten');
            $table->text('ho');
            $table->text('dia_chi');
            $table->text('sdt');
            $table->text('email');
            $table->text('gioi_tinh');
            $table->date('ngay_sinh');
            $table->integer('tuoi');
            $table->unsignedBigInteger('the_id')->nullable();
            $table->foreign('the_id')->references('id')->on('the');
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
        Schema::dropIfExists('hanhkhach');
    }
}
