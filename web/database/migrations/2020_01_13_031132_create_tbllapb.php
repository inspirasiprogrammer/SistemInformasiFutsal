<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllapb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllapb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->enum('delapan',['k','p','b']);
            $table->enum('sembilan',['k','p','b']);
            $table->enum('sepuluh',['k','p','b']);
            $table->enum('sebelas',['k','p','b']);
            $table->enum('duabelas',['k','p','b']);
            $table->enum('tigabelas',['k','p','b']);
            $table->enum('empatbelas',['k','p','b']);
            $table->enum('limabelas',['k','p','b']);
            $table->enum('enambelas',['k','p','b']);
            $table->enum('tujuhbelas',['k','p','b']);
            $table->enum('delapanbelas',['k','p','b']);
            $table->enum('sembilanbelas',['k','p','b']);
            $table->enum('duapuluh',['k','p','b']);
            $table->enum('duapuluhsatu',['k','p','b']);
            $table->enum('duapuluhdua',['k','p','b']);
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
        Schema::dropIfExists('tbllapb');
    }
}
