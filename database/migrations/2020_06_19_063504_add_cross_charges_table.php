<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCrossChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cross_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service_order');
            $table->text('serial');
            $table->text('cost_centre');
            $table->text('cost_element');
            $table->decimal('amount');
            $table->text('text');
            $table->integer('charged');
            $table->date('charged_date');
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
        Schema::dropIfExists('cross_charges');
    }
}
