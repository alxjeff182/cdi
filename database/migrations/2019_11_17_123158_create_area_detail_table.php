<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaDetail', function (Blueprint $table) {
            $table->bigIncrements('idAreaDetail');
            $table->unsignedBigInteger('areaId');
            $table->foreign('areaId')->references('idArea')->on('area')->onDelete('cascade');
            $table->string('areaDetail');
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
        Schema::dropIfExists('areaDetail');
    }
}
