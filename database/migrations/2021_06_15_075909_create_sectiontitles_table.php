<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectiontitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectiontitles', function (Blueprint $table) {
            $table->id();

            $table->string('welcome_title')->nullable();
            $table->text('welcome_content')->nullable();
            $table->string('welcome_image')->nullable();

            $table->string('principle_title')->nullable();
            $table->longText('principle_content')->nullable();
            $table->string('principle_image')->nullable();

            $table->string('chairman_title')->nullable();
            $table->longText('chairman_content')->nullable();
            $table->string('chairman_image')->nullable();

            $table->longText('about_us_content')->nullable();




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
        Schema::dropIfExists('sectiontitles');
    }
}
