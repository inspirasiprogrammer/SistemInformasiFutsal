<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbljenisbayar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbljenisbayar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jual_id');
            $table->foreign('jual_id')->references('id')->on('tbljual');
            $table->enum('jenis',['t','k','d']);
            $table->integer('jlh');
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
        Schema::dropIfExists('tbljenisbayar');
    }
}
