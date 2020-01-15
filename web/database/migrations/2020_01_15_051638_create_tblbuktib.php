<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblbuktib extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbuktib', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lapb_id');
            $table->foreign('lapb_id')->references('id')->on('tbllapb');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('tblitem');
            $table->string("filename")->nullable();
            $table->string("sesi");
            $table->integer("lama");
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
        Schema::dropIfExists('tblbuktib');
    }
}
