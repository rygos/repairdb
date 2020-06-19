<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccessFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('access_overtime');
            $table->integer('access_xcharge');
            $table->integer('access_scrape');
            $table->integer('access_parts');
            $table->integer('access_reports');
            $table->integer('access_stats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('access_overtime');
            $table->dropColumn('access_xcharge');
            $table->dropColumn('access_scrape');
            $table->dropColumn('access_parts');
            $table->dropColumn('access_reports');
            $table->dropColumn('access_stats');
        });
    }
}
