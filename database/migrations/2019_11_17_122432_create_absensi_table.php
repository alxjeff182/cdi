<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->bigIncrements('idAbsensi');
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('idUser')->on('users')->onDelete('cascade');  
            $table->enum('type', ['hadir', 'sakit', 'izin', 'alfa'])->default('alfa');
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
        Schema::dropIfExists('absensi');
    }
}
