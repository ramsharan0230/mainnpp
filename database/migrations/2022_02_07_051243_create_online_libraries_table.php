<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_libraries', function (Blueprint $table) {
            $table->id();
            $table->string('title', 299)->nullable();
            $table->string('subtitle', 299)->nullable();
            $table->timestamp('pulished_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('thumbnail')->nullable();
            $table->string('file')->nullable();
            $table->integer('counts')->default(1);
            $table->string('slug', 500)->nullable();
            $table->enum('status',['active','inactive']);
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
        Schema::dropIfExists('online_libraries');
    }
}
