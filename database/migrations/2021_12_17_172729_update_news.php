<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_events', function (Blueprint $table) {
            $table->longText('news_detail')->nullable()->after('start_date');
            $table->string('image')->nullable()->after('news_detail');
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
            $table->dropColumn('news_detail');
            $table->dropColumn('image');
        });
    }
}
