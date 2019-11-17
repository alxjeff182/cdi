<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskDetail', function (Blueprint $table) {
            $table->bigIncrements('idTaskDetail');
            $table->unsignedBigInteger('taskId');
            $table->foreign('taskId')->references('idTask')->on('task')->onDelete('cascade');
            $table->enum('isComplete', ['0', '1'])->default('0');
            $table->string('taskDetail');
            $table->string('taskImage');
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
        Schema::dropIfExists('taskDetail');
    }
}
