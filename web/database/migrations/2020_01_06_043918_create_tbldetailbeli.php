<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbldetailbeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldetailbeli', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('beli_id');
            $table->foreign('beli_id')->references('id')->on('tblbeli');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('tblitem');
            $table->integer('qty');
            $table->integer('jumlah');
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
        Schema::dropIfExists('tbldetailbeli');
    }
}
