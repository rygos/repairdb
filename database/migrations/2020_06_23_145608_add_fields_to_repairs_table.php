<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->decimal('costs');
            $table->integer('warranty');
            $table->integer('thirdpartydamage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->dropColumn('costs');
            $table->dropColumn('warranty');
            $table->dropColumn('thirdpartydamage');
        });
    }
}
