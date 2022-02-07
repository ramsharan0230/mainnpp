<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->text('address')->nullable();
            $table->text('education')->nullable();
            $table->string('is_completed');
            $table->text('institution')->nullable();
            $table->longText('experience')->nullable();
            $table->string('last_designation')->nullable();
            $table->string('last_org')->nullable();
            $table->decimal('expected_salary')->nullable();
            $table->string('bike')->nullable();
            $table->string('license')->nullable();
            $table->string('attachment')->nullable();
            $table->string('preferred_dep')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}
