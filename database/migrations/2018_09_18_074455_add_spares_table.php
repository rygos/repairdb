<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSparesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sap_no');
            $table->text('sap_desc');
            $table->integer('manufacturer_id');
            $table->integer('model_id');
            $table->integer('customer_id');
            $table->text('manufacturer_part_no');
            $table->text('manufacturer_part_desc');
            $table->text('manufacturer_remarks')->nullable();
            $table->decimal('price_replace');
            $table->decimal('price_stock');
            $table->date('price_replace_date');
            $table->date('price_stock_date');
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
        Schema::dropIfExists('spares');
    }
}
