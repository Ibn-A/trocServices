<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name', 20);
            $table->string('firstname',50)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dateNaissance')->nullable();
            $table->string('adresse', 100)->nullable();
            $table->string('cp', 20)->nullable();
            $table->string('ville', 50)->nullable();
            $table->json('disponibilites')->nullable();
            $table->string('photo', 50)->nullable();
            $table->string('presentation', 300)->nullable();
            $table->char('telephone', 10)->nullable();
            $table->string('role', 10)->default('user');
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
