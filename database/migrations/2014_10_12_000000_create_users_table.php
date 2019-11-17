<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUser');
            $table->string('name');  
            $table->timestamp('dateOfBirth')->nullable();
            $table->bigInteger('phoneNumber')->unique();
            $table->text('address')->nullable();
            $table->String('noKtp')->unique();
            $table->enum('gender', ['male', 'female'])->nullable();;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('cleaner')->nullable();
            $table->string('profilePicture')->default('profile-placeholder.png')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
