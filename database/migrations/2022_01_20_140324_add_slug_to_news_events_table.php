<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToNewsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_events', function (Blueprint $table) {
            $table->string('slug', 299)->nullable();
            $table->boolean('publish', 1,0)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_events', function (Blueprint $table) {
            // $table->dropColumn('slug');
            // $table->dropColumn('publish');
        });
    }
}
