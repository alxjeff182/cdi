<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userTask', function (Blueprint $table) {
            $table->bigIncrements('idUserTask');
            $table->unsignedBigInteger('taskId');
            $table->foreign('taskId')->references('idTask')->on('task')->onDelete('cascade');
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('idUser')->on('users')->onDelete('cascade');
            $table->enum('isComplete', ['0', '1'])->default('0');
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
        Schema::dropIfExists('userTask');
    }
}
