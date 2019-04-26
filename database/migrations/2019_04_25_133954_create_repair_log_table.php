<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reapir_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repair_id');
            $table->text('log');
            $table->integer('closing_reason_id')->nullable();
            $table->timestamps();

            $table->index('repair_id');
            $table->index('closing_reason_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reapir_log');
    }
}
