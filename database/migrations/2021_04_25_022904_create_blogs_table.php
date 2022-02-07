<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('quote')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('posted_by')->nullable();
            //For seo
            $table->string('meta_keywords')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_descriptions')->nullable();

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
        Schema::dropIfExists('blogs');
    }
}
