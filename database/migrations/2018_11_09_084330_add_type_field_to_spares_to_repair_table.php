<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeFieldToSparesToRepairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spares_to_repairs', function (Blueprint $table) {
            $table->integer('type_id');
            $table->index('type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spares_to_repairs', function (Blueprint $table) {
            $table->dropIndex('type_id');
            $table->dropColumn('type_id');
        });
    }
}
