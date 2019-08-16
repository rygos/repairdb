<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrap', function (Blueprint $table) {
            $table->increments('id');
            $table->text('serial');
            $table->text('imei')->nullable();
            $table->text('package')->nullable();
            $table->integer('scraped')->nullable();
            $table->dateTime('scrape_date')->nullable();
            $table->timestamps();

            $table->index('package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scrap');
    }
}
