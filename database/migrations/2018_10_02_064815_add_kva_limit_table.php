<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKvaLimitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kva_limits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('model_id');
            $table->decimal('max_price');
            $table->text('remark');
            $table->timestamps();

            $table->index('customer_id');
            $table->index('model_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kva_limits');
    }
}
