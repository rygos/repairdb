<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('started_at');
            $table->integer('rminstzlb_id');
            $table->integer('customer_id');
            $table->text('serial');
            $table->integer('manufacturer_id');
            $table->integer('model_id');
            $table->integer('repair_type_id');
            $table->integer('closing_reason_id')->nullable();
            $table->text('remarks')->nullable();
            $table->date('closed_at')->nullable();
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
        Schema::dropIfExists('repairs');
    }
}
