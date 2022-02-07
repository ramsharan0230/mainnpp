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
            $table->id();
            $table->string('full_name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('image_path')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status',['active','inactive'])->default('active');


            $table->string('country')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();



            $table->string('scountry')->nullable();
            $table->integer('spostcode')->nullable();
            $table->string('sstate')->nullable();
            $table->string('saddress')->nullable();
            $table->string('saddress2')->nullable();


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
