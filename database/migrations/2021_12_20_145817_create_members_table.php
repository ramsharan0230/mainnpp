<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('gender');
            $table->boolean('disabled');
            $table->integer('birth_year');
            $table->integer('birth_month');
            $table->integer('birth_date');
            $table->string('identity_card');
            $table->string('id_number');
            $table->string('form_reason');
            $table->string('current_country');
            $table->boolean('tem_address');
            $table->string('temp_province')->nullable();
            $table->string('temp_district')->nullable();
            $table->string('temp_municipality')->nullable();
            $table->string('temp_ward')->nullable();
            $table->string('temp_tole')->nullable();
            $table->string('perm_province')->nullable();
            $table->string('perm_district')->nullable();
            $table->string('perm_municipality')->nullable();
            $table->string('perm_ward')->nullable();
            $table->string('perm_tole')->nullable();
            $table->json('samabesi');
            $table->string('occupation');
            $table->string('specialist')->nullable();
            $table->json('party_level')->nullable();
            $table->string('time_duration')->nullable();
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
        Schema::dropIfExists('members');
    }
}
