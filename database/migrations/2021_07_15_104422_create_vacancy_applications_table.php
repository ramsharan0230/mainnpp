<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('vacancy_id')->nullable();
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
        Schema::dropIfExists('vacancy_applications');
    }
}
