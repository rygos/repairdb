<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemarksAndTrackingTpSparesToRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spares_to_repairs', function (Blueprint $table) {
            $table->string('remarks')->nullable();
            $table->string('tracking')->nullable();
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
            $table->dropColumn('remarks');
            $table->dropColumn('tracking');
        });
    }
}
