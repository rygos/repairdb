<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSparesToRepairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spares_to_repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repair_id');
            $table->integer('spare_id');
            $table->text('serial_old')->nullable();
            $table->text('serial_new')->nullable();
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
        Schema::dropIfExists('spares_to_repairs');
    }
}
