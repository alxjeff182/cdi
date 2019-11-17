<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('idInvoice'); 
            $table->unsignedBigInteger('clientId');
            $table->foreign('clientId')->references('idUser')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('taskId');
            $table->foreign('taskId')->references('idTask')->on('task')->onDelete('cascade');
            $table->string('noInvoice')->unique();
            $table->bigInteger('amount');
            $table->bigInteger('tax');
            $table->timestamp('startDate')->nullable();;
            $table->timestamp('endDate')->nullable();;
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
        Schema::dropIfExists('invoice');
    }
}
