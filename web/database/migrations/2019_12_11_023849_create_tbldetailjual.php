<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbldetailjual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldetailjual', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jual_id');
            $table->foreign('jual_id')->references('id')->on('tbljual');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('tblitem');
            $table->integer('qty');
            $table->integer('total');
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
        Schema::dropIfExists('tbldetailjual');
    }
}
