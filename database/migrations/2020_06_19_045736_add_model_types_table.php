<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModelTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_types_xcharge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('short_name');
            $table->text('name');
            $table->decimal('ppi');
            $table->text('cost_center');
            $table->text('cost_element');
            $table->integer('per_part');
            $table->integer('per_call');
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
        Schema::dropIfExists('model_types');
    }
}
