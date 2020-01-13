<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblbuktia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbuktia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lapa_id');
            $table->foreign('lapa_id')->references('id')->on('tbllapa');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tblbuktia');
    }
}
